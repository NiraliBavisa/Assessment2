<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
</head>
<body>
    <form style="border: solid; width: 600px">
        <table>
            <tr><h1 style="border-bottom: solid 2px;"><b> Task List Manager</b></h1>
            <td><h3 style="color: orange;">Breakfast</h3>
1. Tea-Bread & Butter
<h3 style="color: orange;">Add Task</h3>
Task: <input type="text"><br>
<input type="submit" name="t_add" value="Add Task"><br>
<h3 style="color: orange;">Delete Task</h3>
Task: <select><option>Tea-Bread & Butter</option></select><br>
<input type="submit" name="d_add" value="Delete Task"><br></td>
<td><h3 style="color: orange;">List Selection</h3>
List: <select><option>Breakfast</option></select><br>
<input type="submit" name="s_add" value="Select List"><br>
<h3 style="color: orange;">Add Task List</h3>
List <input type="text" name="list"><br>
<input type="submit" name="add" value="Add List"><br></td></tr>
<tr><td align="right"><a href="Assessment2.php">Clear All</a></td></tr>
        </table>
    </form>
</body>
</html>