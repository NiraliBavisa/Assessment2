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
There are no tasks in the selected task list.
<h3 style="color: orange;">Add Task</h3>
Task: <input type="text"><br>
<a href="Breakfast_Ass.php">Add Task</a></td>
<td><h3 style="color: orange;">List Selection</h3>
List: <select><option>Breakfast</select><br>
<input type="submit" name="s_add" value="Select List"><br>
<h3 style="color: orange;">Add Task List</h3>
List <input type="text" name="list"><br>
<input type="submit" name="add" value="Add List"><br></td></tr>
<tr><td align="right"><input type="submit" name="clear" value="Clear All"></td></tr>
        </table>
    </form>
</body>
</html>