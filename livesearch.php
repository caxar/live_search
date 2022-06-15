<?PHP 
    include './db.php';

    if(isset($_POST['input'])) {
        $input = $_POST['input'];
        $query = "SELECT * FROM search WHERE name LIKE '$input%'";
        $result = $dsn->prepare($query);
        $result->execute();
        // $result->fetchAll(PDO::FETCH_ASSOC);
        if($result->rowCount() > 0) { ?>
                <table class="table table-bordered table-striped mt-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Country</th>
                            <th>Email</th>
                            <th>Occupation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                echo "<td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['age']}</td>
                                <td>{$row['country']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['occupation']}</td>";
                            }
                            ?>
                            </tr>
                    </tbody>

                </table>       

            <?php 
        } else {
            echo '<h2>No data found</h2>';
        }
    }

    ?>