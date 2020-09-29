<%@page import="edu.armstrong.news.mercer.*"%>

<html>

<head>
	<title>Simple Brain X3D Model</title>
	
	<link rel="stylesheet" type="text/css" href="<%= Settings.CSS %>/index.css" />
</head>
  
<body>
	<div class="textCentered">
		<embed width="90%" height="90%" src="<%= Settings.BRAIN_ASSEMBLY %>/x3d/Brain.x3d">
	</div>
	<div>
		<input type="button" value="home" onclick="location.href='<%= Settings.ROOT %>/';">

		<input type="button" value="resources" onclick="location.href='<%= Settings.RESOURCES %>';">
	</div>
</body>

</html>