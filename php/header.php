<!--This is PHP to be implemented in all pages-->
<link rel="stylesheet" href="../css/header.css">
<div id = "navBarWrapper">
    <nav id = "navBar" class = "topnav">
		<?php if(isset($_SESSION["userID"])) : ?><!--Checking if student is logged in for different nav bar-->
			<a id = "homeLink" href = "index.php"><img id = "logo" src = "../rsc/text_logo.png"></a>
				<a class = "baseText" id = "suggestionsLink" href = "suggestions.php">Smart Suggestions</a>
				<form id = "searchBarForm" method = "get" action = "search.php">	
					<div id = "searchBarWrapper">
						<input type = "text" id = "searchBar" name = "query" placeholder = "Search for recipes by name" autocomplete = "off">
						<input type = "submit" id = "searchSubmit" name = "submit"> 
					</div>	
				</form>
				<a class = "baseText" id = "myProfileLink" href = "profile.php?userID=<?php echo $_SESSION['userID'];?>">My Profile</a>
				<a class = "classicColor" id = "logoutButtonNav" href = "logout.php">Log Out</a>
		<?php else: ?>
			<a id = "homeLink" href = "index.php" style="margin-right:calc(37% - 60px);"><img id = "logo" src = "../rsc/text_logo.png"></a>
			<form id = "searchBarForm" method = "get" action = "search.php" style="margin-left: calc(12.5% - 125px);margin-right: calc(12.5% - 125px);">	
				<div id = "searchBarWrapper">
					<input type = "text" id = "searchBar" name = "query" placeholder = "Search for recipes by name" autocomplete = "off">
					<input type = "submit" id = "searchSubmit" name = "submit"> 
				</div>	
			</form>
			<a class = "classicColor" id = "loginButtonNav" href = "login.php" style="margin-left: calc(12.5% - 45px);margin-right: calc(12.5% - 45px);float:right;">Log In</a>
		<?php endif; ?>
    </nav>
</div>