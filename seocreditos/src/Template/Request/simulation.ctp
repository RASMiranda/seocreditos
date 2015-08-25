<table class="table">
    <caption>Simulation result</caption>
    <thead><tr>
        <th>name</th>
        <th>TAN</th>
        <th>monthly fee</th>
        <th>MITC</th>
        <th>approval rating</th>
        <th></th>
    </tr></thead>
    <tbody>
    <?php foreach ($simulations as $key => $row) {
        echo "<tr>
            <td>".$row['supplier']."</td>
            <td>".$row['TAN']."</td>
            <td>".$row['monthly fee']."</td>
            <td>".$row['approval_rating']."</td>
            <td>
                <form action='/request/add' method='post'>
                    <input type='submit' value='Request'/>
                    <input type='hidden' name='supplier' value='".$row['supplier']."'/>
                </form>
            </td>
            </tr>";
    }
    ?>
    </tbody>
</table>             