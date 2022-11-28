<?php
	include 'connect.php';
	$sql = "SELECT * FROM formundangan ORDER BY id DESC LIMIT 2";
	$result = $conn->query($sql);
	if ($result !== false && $result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	     
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="#rsvp"></a>  
                                    <div class="mic-info">
                                        <a href="mailto::<?= $row['email'] ?>" style="font-family:'Times New Roman', Times, serif;"><?=$row['name']; ?></a> 
                                    </div>
                                </div>
                                <div class="comment-text" style="font-family:'Times New Roman', Times, serif; color:black">
                                <?=$row['body'];?>
                                </div>
                               
                            </div>
                        </div>
                    </li>   
                   
<?php	
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>