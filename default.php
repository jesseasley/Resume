<?php
//possible tags
//?technical
//?management
//?history
//?realestate
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Jess Easley's Resume</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function oth()
{
    //var o = document.getElementById('ot');   
  //  div.style.height = '200px';   
//	var o = 
//	alert (document.all.ot.offsetHeight);
//	alert(document.all.ri.height);
//	document.all.ri.height=document.all.ot.offsetHeight-16;
	alert(document.all.ot.offsetWidth);
//	alert(document.all.ri.height);
}
</script>
</head>
<body bgcolor="#EEEEEE" onload="document.all.ri.height=document.all.ot.offsetHeight-16;">
<div align="center">
	<table id=ot border="0" width="780" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="2" rowspan="2" >
				<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
					<tr>
						<td width="7" height="7"></td>
						<td height="7"></td>
						<td width="7" height="7"></td>
					</tr>
					<tr>
						<td width="7"></td>
						<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr height=7>
									<td colspan="4"></td>
								</tr>
								<tr>
									<td colspan="4"><b>Jess Easley</b></td>
								</tr>
								<tr>
									<td colspan="4"><b>Flower Mound, TX </b> </td>
								</tr>
								<tr>
									<td colspan="4"><b>(972) 284-9403</b></td>
								</tr>
								<tr>
									<td colspan="4">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="4"><b>Employment Objective</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3">
<?php
	if (isset($_REQUEST['technical']))
		echo "Provide top technical talent to innovative IT groups within progressive companies.";
	else
		echo "Provide strong leadership to innovative IT groups within progressive companies.";
?>
								
									</td>
								</tr>
								</div>
								<tr>
									<td width="100%" colspan="4">&nbsp;</td>
								</tr>
								<tr>
									<td width="100%" colspan="4"><b>Work Experience</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3"><b>RealPage</b> – Software for the multi-unit 
									housing industry.</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3">Carrollton, TX – 10/09 – Present</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Senior Manager for Enterprise Applications</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li>Had HR responsibilities for the team.</li>
										<li>Responsible for Enterprise level development efforts.</li>
										<li>Provided hiring, direction and coaching of on-shore and off-shore teams.</li>
										<li>Responsible for the rebuilding of companies transactional reporting systems.</li>
										<li>Oversight of Single Sign-On product.</li>
										<li>Oversight of the redesign and development effort to modernize our flagship product.</li>
										<li>Oversight of report performance improvements.</li>
										<li>Responsible for mobile solution for Facilities product line.</li>
									</ul>
									</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Lead Developer/Team Lead</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li>Provided direction and oversight to a team of three in India.  Managed assignments and deliveries, and contributed to reviews.</li>
										<li>Provided direction and oversight to a team of three in Oregon.</li>
										<li>Responsible for building and managing a team in the Philippines.  The team consists of a Manager, who reports to me, 4 dev positions and 3 BA/QA positions.</li>
										<li>Responsible for on-boarding the largest client in the company’s history, opening the door to an entirely new revenue stream, the Military market.  Single handedly created new processes and techniques that enabled the company to onboard these oversized customers quickly and easily.  With the sheer size of these customers, this new ability to on-board them had a direct impact on the bottom line.</li>
										<li>Working with little direction, I created an inventory system that integrated our parts use with our procurement system.  This became an independently sold item that added to the corporate menu of sales options, leaning on the well penetrated market of facilities management customers, this product came with an enormous built-in sales potential.</li>
										<li>Delivered an Android mobile system for field workers.  This product would either work live with or synchronize with the main OneSite system depending on coverage.  This product took off like wildfire.</li>
									</ul>
									</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3"><b>Easley Consulting</b> – Web design solutions for the SMB market.</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3">Flower Mound, TX – 9/07 – Present</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Owner/Operator</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li>Responsible for advertising, sales management and operations.</li>
										<li>Marketing the company services to firms under $100MM.</li>
										<li>R & D solutions based on requirements.</li>
										<li>Proposed design options ranging from economical to full-featured.</li>
										<li>Built web sites to spec.</li>
										<li>Assisted with setup of domain registration/hosting/email accounts/ftp accounts.</li>
										<li>Deployed and tested web sites per spec.</li>
									</ul>
									</td>
								</tr>
<?php
	if (isset($_REQUEST['realestate']))
		include("realestate.htm");
?>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3"><b>Citigroup</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3">Irving, TX - 7/03 – 4/07</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Manager of Business Applications</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li>Managed a growing team which reached forty five, including five 
										Team Leads.</li>
										<li>Team Leads consisted of; A Manager over the ESB team, a Lead 
										over the HFE team, an offshore Lead and two regular Team Leads.</li>
										<li>Responsible for internal/external web sites and B2B pipelines. 
										Internal web sites were mostly utility based systems for special 
										groups. External web sites were focused on auto loan application 
										retrieval. B2B pipelines were where most of the loan traffic came 
										from.</li>
										<li>Together these different processes are responsible for over a 
										billion dollars a month in revenue generation.</li>
									</ul>
									</td>
								</tr>
<!--
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Technical Resource Manager</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li>Responsible for HR duties such as year-end reviews and raises 
										and departmental needs like training and mentoring.</li>
										<li>Provided mentorship and leadership that led to the successful 
										development of several projects.</li>
									</ul>
									</td>
								</tr>
-->
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3"><b>Technium Consulting</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3">Dallas, TX - 6/98 – 7/03</td>
								</tr>
<!--
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">I held several positions at this company as well as 
									performing duties at client sites.</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">&nbsp;</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Internally</b></td>
								</tr>
-->
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Manager of the Dallas Office</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li><b>Took responsibility for the Dallas office</b></li>
										<li>Responsible for generating new sales and management of the 
										active sales accounts.</li>
										<li>Identified a number of areas to cut costs and brought the Dallas 
										office out of the red.</li>
									</ul>
									</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Director of Application Development</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li>Responsible for oversight of Practice Managers and the Practices 
										in general for the company. This included <b>Business Intelligence, 
										Visual Basic, Infrastructure </b>and<b> User Interface Practice 
										Managers.</b> 
										My role was to provide guidance in developing their respective 
										practice groups into large, closely-knit, knowledgeable groups.</li>
										<li>Successfully guided the consultants down the road towards the 
										full dot.net platform.</li>
										<li>Consulted with the other administrative staff on consultant 
										reviews and training needs.</li>
									</ul>
									</td>
								</tr>
<!--
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Internet Practice Manager</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li>Folded the Visual Basic and Internet technologies together.</li>
										<li>Lead groups in learning more about Visual Interdev and Remote 
										Data Services.</li>
										<li>Gave demonstrations on using Front Page to design the look and 
										feel of a site, Interdev to code ASP and how ASP script communicates 
										with middle tier objects.</li>
									</ul>
									</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Visual Basic Practice Manager</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li>Conducted technical interviews of all prospective consultants</li>
										<li>Encouraging consultants to attend Microsoft events and internal 
										training in our area.</li>
										<li>Offered training based on the Mastering Series from Microsoft.</li>
										<li>Led a study group for certification in test 70-176 with eight 
										people getting certified through the program.</li>
									</ul>
									</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">&nbsp;</td>
								</tr>
-->
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Clients</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Associates - Site Manager</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li>Led several teams to the successful implementation of multi-tier 
										web sites on time and under budget.</li>
										<li>The activities of this group generated <b>new business</b> for the 
										company to the tune of <b>over one hundred million dollars per month.</b></li>
										<li>Development was highly object oriented with an emphasis on 
										re-use, with a heavy involvement in all three tiers using <b>VB 6.0, MTS, 
										SQL Server 7.0, XML </b>and<b> ASP.</b></li>
									</ul>
									</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%"><b>Meristar - Site Manager</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="2%">&nbsp;</td>
									<td width="96%">
									<ul>
										<li>Managed the site as <b>Technical Lead</b>, which consisted of several 
										teams, totaling more than twenty.</li>
										<li>Managed a team that developed an Accounts Payable interface.</li>
										<li><b>Technologies and tools employed were VB 6.0, MTS, SQL Server 7.0 
										and Oracle 8</b></li>
										<li>Responsible for the <b>architectural</b> design of this multi-million 
										dollar project.</li>
										<li>VB applications were distributed to over two hundred hotels 
										internationally.</li>
										<li>Integrated this application into the AP environment, saving the 
										expense of significant increases in AP department staffing.</li>
									</ul>
									</td>
								</tr>
<?php
	if (isset($_REQUEST['history']))
		include("history.htm");
?>
								<tr>
									<td width="100%" colspan="4"><b>Education</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3">
									<ul>
										<li>Floyd Wickman - November 2007</li>
										<li>OOD &amp; UML </li>
										<li>C# Programming</li>
										<li><b>IS Vulnerabilities </b>and Defenses for Web Application Developers</li>
										<li><b>Six Sigma</b></li>
										<li><b>Preparing to Lead</b> - September 2003</li>
										<li><b>Leading People</b> - October 2003</li>
										<li><b>Leadership</b> - November 2003</li>
										<li><b>Microsoft Certified Solution Developer</b> – March 2000</li>
										<li><b>Associates</b> Degree in <b>Computer Programming for Business</b><br>
										Pierce College, Woodland Hills, CA</li>
									</ul>
									</td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td width="100%" colspan="4"><b>Interests/Hobbies</b></td>
								</tr>
								<tr>
									<td width="2%">&nbsp;</td>
									<td width="98%" colspan="3">
									<ul>
										<li>Created, published and distributed my own software title - June 
										2001</li>
										<li>Designed, built and sold display cases - October 2008</li>
										<li>Treasurer for Cub Scouts Pack 2</li>
										<li>President of the Waterford Park Home Owner’s Association</li>
									</ul>
									</td>
								</tr>
								</table>
							</td>
							<td width="7"></td>
						</tr>
<?php
	if (isset($_REQUEST['technical']))
		include("skillsbullets.htm");
?>
						<tr>
							<td width="7" height="7"></td>
							<td height="7"></td>
							<td width="7" height="7"></td>
						</tr>
					</table>
				</td>
				<td width="8" height="8"><img src="images/topright.jpg" height=8 width=8></td>
			</tr>
			<tr>
				<td id=righttd width=8><img width=8 id=ri src="images/right.jpg"></td>
			</tr>
			<tr>
				<td width="8" height="8"><img src="images/bottomleft.jpg" height=8 width=8></td>
				<td height=8 width=764> <img src="images/bottom.jpg" height=8 width=764></td>
				<td height=8 width=8><img src="images/bottomright.jpg" height=8 width=8></td>
			</tr>
		</table>
</div>
</body>

</html>