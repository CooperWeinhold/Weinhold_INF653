<?php
require_once('../model/database.php');
require_once('../model/assignment_db.php');
require_once('../model/course_db.php');

$assignment_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($assignment_id) {
    $query = "SELECT * FROM assignments WHERE ID = :assignment_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':assignment_id', $assignment_id, PDO::PARAM_INT);
    $statement->execute();
    $assignment = $statement->fetch();
    $statement->closeCursor();

    $courses = get_courses();
} else {
    header("Location: ../index.php?action=list_assignments");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Assignment</title>
</head>
<body>
    <h2>Update Assignment</h2>
    <form action="../index.php" method="post">
        <input type="hidden" name="action" value="update_assignment">
        <input type="hidden" name="assignment_id" value="<?= $assignment['ID']; ?>">

        <label>Description:</label>
        <input type="text" name="description" value="<?= htmlspecialchars($assignment['Description']); ?>" required>

        <label>Course:</label>
        <select name="course_id">
            <?php foreach ($courses as $course) : ?>
                <option value="<?= $course['courseID']; ?>" <?= ($assignment['courseID'] == $course['courseID']) ? 'selected' : ''; ?>>
                    <?= htmlspecialchars($course['courseName']); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Update Assignment</button>
    </form>
</body>
</html>
