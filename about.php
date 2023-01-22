<?php
require('./components/navbar.php');
?>
<center>About Page</center>





<table>
                        <thead>
                            <th>Index</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </thead>
                        <?php
                        while ($result = mysqli_fetch_assoc($run)) {
                            echo '<tbody>
                                    <td><a href="#">'.$result["sl"].'</a></th>
                                    <td><a href="#">'.$result["firstName"].'</a></td>
                                    <td><a href="#">'.$result['email'].'</a></td>
                                    <td><a href="#">';if ($result['role'] == 0) { echo "Admin"; } else{ echo "User";};
                                    '</a></td>
                                </tbody>';
                            }
                        ?>
                    </table>