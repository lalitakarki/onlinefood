<div class="container">
 <!-- <h2>Users</h2>
  <p>The list of users inside the table.</p> -->
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>item_no</th>
          <th>item_name</th>
          <th>item_price(rs)</th>
          <th>half</th>
          <th>Full</th>
          <th>total_item</th>
          <th>item_sold</th>
          <th>item_remaining</th>
          <th>unit_of_item</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = selectAll("stock1"); // all users in table.
        //print_r($result);
        $i = 1;
        foreach ($result as $stock) //$user is an single user returned by sql query
        {
        ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $stock['Item_no.']; ?></td>
          <td><?php echo $stock['item_name']; ?></td>
          <td><?php echo $stock['item_price(rs)']; ?></td>
          <td><?php echo $stock['Half']; ?></td>
          <td><?php echo $stock['full']; ?></td>
          <td><?php echo $stock['total_item']; ?></td>
          <td><?php echo $stock['item_sold']; ?></td>
          <td><?php echo $stock['item_remaining']; ?></td>
          <td><?php echo $stock['unit_of_item']; ?></td>
        </tr>
        <?php
              }
              $i++;
              ?>
      </tbody>
    </table>
  </div>
</div>