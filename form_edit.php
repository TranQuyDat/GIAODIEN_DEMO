<!DOCTYPE html>
<html>
<head>
  <title>Edit User</title>
  <style>
    form {
      width: 400px;
      margin: auto;
    }
    label, input {
      display: block;
      margin-bottom: 10px;
    }
    input[type="submit"] {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Edit User</h1>
  <form method="post" action="edit_user.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="">

    <input type="hidden" name="user_id" value="">

    <input type="submit" value="Save Changes">
  </form>
</body>
</html>
