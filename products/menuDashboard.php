<?php
require_once "MenuController.php";
?>

<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: blue;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>

<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Menu image</th>
              <th>Menu title</th>
              <th>Menu body</th>
              <th>Price</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $m = new MenuController;
            $allMenu = $m->readData();
            foreach($allMenu as $menu): ?>
          
          <tr>
            <td><?php echo $menu['menu_image']?></td>
            <td><?php echo $menu['menu_title']?></td>
            <td><?php echo $menu['menu_body']?></td>
            <td><?php echo $menu['menu_price']?></td>
            <td><a href="edit-menu.php?id=<?php echo $menu['id']; ?>">Edit</a></td>
            <td><a href="delete-menu.php?id=<?php echo $menu['id']; ?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>