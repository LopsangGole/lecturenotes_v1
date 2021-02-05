<ul>

			<li id="search">
				<h2>Search</h2>
				<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
			<li>
				<h2>Categories</h2>
				<ul>
					
					
					
								<?php
										$con=mysqli_connect("localhost","root","","lecturev1");
										if (mysqli_connect_errno()) {
											echo "Failed to connect to MySQL: " . mysqli_connect_error();
											exit();
										  }
			
										$query="select * from category ";
			
										$res=mysqli_query($con,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
												//pass catid not catnm
											}
			
											mysqli_close($con);
								?>
				</ul>
			</li>
			
		</ul>