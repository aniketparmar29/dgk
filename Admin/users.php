<?php 
include '../dbconnection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<div class="p-4 sm:ml-64">
   <div class="p-4  border-gray-200  rounded-lg dark:border-gray-700">
 


<div class="container mx-auto p-8">
  <h1 class="text-3xl mb-8">User Listing</h1>
  <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-200">
      <thead>
        <tr class="bg-gray-100">
          <th class="px-6 py-4 border-b">ID</th>
          <th class="px-6 py-4 border-b">Username</th>
          <th class="px-6 py-4 border-b">Role</th>
          <th class="px-6 py-4 border-b">Email</th>
          <th class="px-6 py-4 border-b">Mobile</th>
          <th class="px-6 py-4 border-b">Created At</th>
          <th class="px-6 py-4 border-b">Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php
// Fetch users from the database
$query = "SELECT `id`, `username`, `role`, `email`, `mobile`, `created_at` FROM `user`";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query execution failed: " . mysqli_error($conn));
}
while ($row = mysqli_fetch_assoc($result)) {
    $userID = $row['id'];
    $username = $row['username'];
    $role = $row['role'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $createdAt = $row['created_at'];
?>
    <tr>
        <td class="px-6 py-4 border-b"><?php echo $userID; ?></td>
        <td class="px-6 py-4 border-b"><?php echo $username; ?></td>
        <td class="px-6 py-4 border-b"><?php echo $role; ?></td>
        <td class="px-6 py-4 border-b"><?php echo $email; ?></td>
        <td class="px-6 py-4 border-b"><?php echo $mobile; ?></td>
        <td class="px-6 py-4 border-b"><?php echo $createdAt; ?></td>
        <td class="px-6 py-4 border-b">
            <form action="delete_user.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                <input type="hidden" name="user_id" value="<?php echo $userID; ?>">
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">Delete</button>
            </form>
        </td>
    </tr>
<?php
}
mysqli_free_result($result);
mysqli_close($conn);
?>
</div>
</div>

</body>
</html>