<?php
session_start();
?>
<!DOCTYPE html>

<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>NoFullTime</title>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php" style="font-size:25px;color:white;font-weight: bold;">NO FULL TIME</a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.php">Home</a></li>
						<li><a href="about-us.php">About Us</a></li>
						<li><a href="category.php">Category</a></li>

						<li><a href="recruiters.php">Recruiters</a></li>
						<li><a href="contact.php">Contact</a></li>
						<?php
						if (isset($_SESSION['id'])) { ?>
							<li class="menu-has-children" style='background-color:none'><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
								<i class='fas fa-user-circle mobile' style='font-size:36px;color:white'></i>
								<ul>
									<li><a href="./profile/index.php">Profile</a></li>
									<li><a href="./seeker_preferences.php">Edit</a></li>
									<li><a href="./logout.php">Logout</a></li>
								</ul>
							</li>
						<?php } else { ?>
							<li class="menu-has-children" style="background-color:white"><a href="" style='color:#7b63f1'>Signup</a>
								<ul>
									<li><a href="./Register/studentRegister.php">As a Student</a></li>
									<li><a href="./Register/recruiterRegister.php">As a recruiter</a></li>
								</ul>
							</li>
							<li class="menu-has-children" style="background-color:white"><a href="" style='color:#7b63f1'>Login</a>
								<ul>
									<li><a href="./Register/studentLogin.php">As a Student</a></li>
									<li><a href="./Register/recruiterLogin.php">As a recruiter</a></li>
								</ul>
							</li>
						<?php } ?>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Terms and Conditions
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start service Area -->
	<section class="service-area section-gap" id="service">
		<div class="p12">

			<div id="pageWrap">
				<div id="page">
					<div id="main" class="site-main">
						<div class="legal-page hl_en container-fluid legal-wrapper">

							<main class="legal-content" aria-labelledby="legal-page-title">
								<div class="container-fluid">
									<div class="legal-header">
										<h1 style="text-align:center" ; id="legal-page-title" class="legal-header--title cntnr--no-margin text--bold"> Terms of Service
										</h1>
									</div>

									<p>Below you will find NoFullTime’s terms and conditions.
										We know we are giving a great deal of information.
										NoFullTime does this for a reason: we want you to have as much knowledge about
										what we do for you at NoFullTime as is possible.
										We do not want you to wonder about any of our processes or procedures or guess
										as to what your interaction with NoFullTime means.
										We want you to understand it, which is why we must explain it in detail. We urge
										you to read these terms or any section of interest to you.
										You are agreeing to proceed under them.
									</p>
									<div id="i4c-dialogs-container">
										&nbsp;
									</div>
								</div>

								<div class="container-fluid">
									<div class="legal-header">
										<h2 id="legal-page-title" class="legal-header--title cntnr--no-margin text--bold"> Introduction to
											NoFullTime's Terms and Services </h2>
									</div>

									<p>Each time you access or use NoFullTime’s online and/or mobile services and
										websites, including but not limited to any NoFullTime mobile application and
										browser extension or
										plugin (collectively the “NoFullTime Apps”), regardless of where it is
										downloaded from, and any software, service, feature, product, program and
										element provided by or on
										behalf of NoFullTime on or in connection with such services or websites
										(collectively, the “Site”), including, but not limited to, any products,
										programs, and services
										described in these Terms of Service, you are agreeing to the terms and
										conditions of these Terms of Service (the “Agreement”) then in effect with the
										following entity or
										entities:</p>
									<p>The Site is made available for use only by individuals searching for employment
										openings, or services or information related to their personal employment or job
										search
										(“Job Seekers”), by individuals and/or organizations seeking information related
										to hiring or human resources, seeking Job Seekers, or seeking to make available
										information
										regarding employment openings, on their behalf or other’s behalf, including but
										not limited to agencies purchasing for multiple parties and employment agencies
										(“Employers”). NoFullTime may also act as an employment agency on behalf of
										Employers who purchase such services.
										You acknowledge and agree that your license to use the Site is automatically
										revoked upon your attempt to use the Site for any other purpose.
										If you are accessing or using the Site in your capacity as an employee or other
										representative of an Employer, you are agreeing to this Agreement on behalf of
										yourself
										and such Employer, as applicable, and you represent and warrant that you have
										the authority to bind such Employer, as applicable, to this Agreement.
										You acknowledge that NoFullTime owns a copyright in the Site, NoFullTime Apps,
										and Services, including in compilations of information available through any of
										the foregoing.</p>
									<p>We may change this Agreement by notifying you of such changes by any reasonable
										means, including by posting a revised Agreement through the Site.
										Any such changes will not apply to any claim brought prior to the date on which
										we posted the revised Agreement incorporating such changes, or otherwise
										notified you of such changes.
										Your access to or use of the Site following any changes to this Agreement will
										constitute your acceptance of such changes.
										We may, at any time and without liability, modify or discontinue all or part of
										the Site (including access to the Site via any third-party links); charge,
										modify or
										waive any fees required to use the Site; or offer opportunities to the users.
									</p>
									<p>We are committed to ensuring that there is no modern slavery or human trafficking
										in our supply chains or in any part of our business. </p>
									<p>This Agreement hereby incorporates by this reference any additional terms and
										conditions posted by NoFullTime through the Site, or otherwise made available to
										you by NoFullTime. In particular:</p>
									<ul>
										<li><span style="font-weight: 400;">If you access or use the NoFullTime Hiring
												Events, you are agreeing to be bound by the</span><span style="font-weight: 400;">&nbsp;NoFullTime Hiring Events Terms.</span>
										</li>
										<li><span style="font-weight: 400;">If you access or use the NoFullTime Hiring
												Platform, you are agreeing to be bound by the&nbsp;</span><span style="font-weight: 400;">NoFullTime Hiring Platform Terms.</span></li>
									</ul>
									<div id="i4c-dialogs-container">
										&nbsp;
									</div>
								</div>

								<div class="container-fluid">
									<div class="legal-header">
										<h2 class="terms--title text--bold">NoFullTime General Terms of Service </h2>
										<br>
									</div>

									<div class="has-jumplink" id="jobseekers">
										<h3>A. Terms of Service for Job Seekers</h3>
										<h4>1. Job Listings</h4>
										<p>NoFullTime may make available Job Listings advertising employment
											opportunities and other job-related content, including links to third-party
											websites (“Job Listings”), through NoFullTime’s search results or otherwise
											through the Site.
											Searching for Job Listings on NoFullTime is free for Job Seekers.
											Job Listings are created and provided by third parties over whom NoFullTime
											exercises no control; you acknowledge and understand that NoFullTime has no
											control over the content of Job Listings, links to or from Job Listings, or
											any conditions third parties might impose once a Job Seeker has submitted an
											application or left the Site.
											For example, some of these third parties may attempt to charge Job Seekers a
											fee to apply to a particular job, although NoFullTime endeavors not to make
											such Job Listings available on the Site.
											If you leave the NoFullTime Site and choose to enter a third-party website,
											you accept any terms and conditions imposed by that third-party. Employer
											websites may have conversion trackers or other functionality provided by
											NoFullTime, which informs us that an application has been completed on an
											Employer site.
											An Employer who installs such functionality is required under this Agreement
											to provide any notice, and obtain any prior consent, that may be required by
											applicable law.
											However, you acknowledge and agree that NoFullTime has no control over such
											an Employer or its website.
											You agree to NoFullTime’s use of, and receipt of information from, any such
											conversion tracker functionality.
											Except for sponsored, featured or paid placements, the Job Listings
											contained on, or linked from, the Site are indexed or posted in an automated
											manner.
											NoFullTime has no obligation to screen any Job Listings, or to include any
											Job Listings, in its search results or other listings, and may exclude or
											remove any Job Listings from the Site or your search result for any or no
											reason.
											You understand and agree that NoFullTime has no obligation to present you
											with any or all Job Listings.
											We cannot confirm the accuracy or completeness of any Job Listing or other
											information submitted by any Employer or other user, including the identity
											of such Employer or other user.
											NoFullTime assumes no responsibility, and disclaims all liability for the
											content, accuracy, completeness, legality, reliability, or availability of
											any Job Listings, Company Pages, screener questions and responses, and
											assessments.
											Additionally, NoFullTime may provide search options to narrow down Job Ads
											search results by job type categories (i.e. full-time, part-time, etc.), and
											such categories are created independently and entirely by NoFullTime, and
											may not directly or accurately reflect the content of the Job Listings.
											NoFullTime may reformat Job Listings so that you may read them more clearly
											on a mobile phone.
											Placement of a Job Listing on a certain page (for example, on NoFullTime
											Gigs) is not a representation regarding the nature of the role for legal
											purposes.
											While NoFullTime may in some circumstances be compensated by employers who
											post Job Listings, helping keep NoFullTime job search free for Job Seekers,
											all Job Listings are considered advertising.
											NoFullTime displays Job Ads based on a combination of employer bids and
											relevance, such as search terms, and other information provided and
											activities conducted on NoFullTime.
											You are not permitted to use NoFullTime’s Site or its content other than for
											non-commercial purposes.
											For purposes of this Section A of the NoFullTime General Terms of Service,
											all references to “you” or “your” shall mean you, the individual or
											organization accessing this Site in your capacity as a Job Seeker.
											NoFullTime may provide functionality to call a telephone number contained in
											a Job Listing using the phone app on a mobile device.
											NoFullTime cannot guarantee that the extracted phone number is the correct
											phone number for the Employer or for the Job Listing you are viewing.
										</p>
										<h4>2. Resumes, Profile, and Recommended Jobs</h4>
										<p>By creating a public resume through the Site <span style="font-weight: 400;">(“NoFullTime Resume”) or uploading a file
												resume on the Site (collectively, “Your Resume” or “Job Seeker
												Resume”)</span>, you are requesting and authorizing NoFullTime to make
											available Your Resume to third parties, such as Employers, that NoFullTime
											believes may have an interest in Your Resume.
											<span style="font-weight: 400;">If you do not want NoFullTime to make
												available Your Resume to third parties or if you do not want Employers
												to contact you, set your NoFullTime Resume and uploaded file resume to
												private.
												Setting Your Resume to private will not affect your previous
												applications or prevent employers you responded to from contacting you.
												<p>By creating an NoFullTime Resume or uploading a file resume on
													NoFullTime, NoFullTime may share with you Job Listings that match
													the contents of Your Resume.
													NoFullTime may also highlight to you items in Your Resume that may
													match qualifications from the Job Listing, or highlight to you items
													that appear in the Job Listing and may be missing from Your Resume.
													These highlights do not mean you are or are not qualified for the
													job or that you should or should not apply for it.
													Applying for such Job Listings does not guarantee job interviews or
													hiring.
													Even where NoFullTime highlights items or a Job Listing is shared
													with you, NoFullTime assumes no responsibility, and disclaims all
													liability for the content, accuracy, completeness, legality,
													reliability, or availability of Job Listings or highlights.
													B<span style="font-weight: 400;">y creating or uploading Your
														Resume, you are requesting and authorizing NoFullTime, or an
														NoFullTime vendor, to review or scan Your Resume and provide you
														feedback (in NoFullTime’s discretion), including suggested
														changes.
														NoFullTime assumes no responsibility and disclaims all liability
														for any changes you make based on any provided feedback. </span>
													NoFullTime assumes no responsibility and disclaims all liability for
													the resume or application information you post, send or receive
													through the Site.
													By uploading a file resume on the Site, you agree that NoFullTime
													may convert your file resume to a different file type.
													It is your responsibility to review Your Resume to ensure that the
													content appears as you intend, and that it contains the right
													information or any information you intend to include or update.
													If you see any inaccuracy in any such material, it is your
													responsibility to correct such information or to contact NoFullTime
													to do so.
													<span style="font-weight: 400;">It may take a few days for updates
														to your account or resume to be reflected.</span>
													To mitigate fraud, NoFullTime may mask or hide your contact
													information, such as your email address, from Your Resume or
													application, for example, and may substitute it with an alias.
													NoFullTime makes no promise to you about whether all or part of your
													contact info will be masked, and the decision to mask such info is
													in NoFullTime’s sole discretion.
													NoFullTime reserves the right to limit your ability to set Your
													Resume to public, and may toggle a public resume to private, at any
													time, to prevent illegal conduct, for fraud mitigation, or for any
													other reason in NoFullTime’s discretion.&nbsp;
												</p>
												<p><span style="font-weight: 400;">If you have an NoFullTime account, an
														NoFullTime Resume, or an uploaded file resume, you agree that
														NoFullTime may associate Your Resume data with your profile on
														NoFullTime (“NoFullTime Profile”). </span>
													<span style="font-weight: 400;">Your NoFullTime Profile consists of
														information you provide on the Site in the “Profile” section of
														your account.
														This includes your NoFullTime Resume, </span><span style="font-weight: 400;">whether you are ready to
														work,</span><span style="font-weight: 400;"> or pay. </span>
													<span style="font-weight: 400;">Information in your NoFullTime
														Profile, except as otherwise indicated on the Site, may be
														available to third parties, such as Employers.
														If you do not want NoFullTime to make your NoFullTime Profile
														available to third parties or if you do not want Employers to
														contact you, set your NoFullTime Resume and uploaded file resume
														to private or remove Your Resume.
														You can enable the ready to work feature on your profile to let
														Employers know that you can start work immediately.
														After 60 days, we will automatically remove that feature from
														your profile, but you can manually enable it again. </span>
												</p>
												<p>NoFullTime may also automatically send you recommended jobs via the
													email address you use to create an NoFullTime account or apply to a
													job.
													NoFullTime may determine what these recommended jobs are on the
													basis of a variety of factors, including but not limited to, any
													information you input on the Site about yourself (including in Your
													Resume), searches you run on the Site, jobs you click on, jobs you
													apply to, or the materials you provide in a job application to an
													Employer through NoFullTime.</p>
												<h4>3. Applying to Jobs Through NoFullTime</h4>
												<p>Any resume or application information that you submit through the
													Site, including Personal Data included in a resume and application
													or responses to screener questions (“NoFullTime Apply”), is subject
													to this Agreement and to NoFullTime’s Privacy Policy.
													Once you provide information to an Employer (whether in the form of
													a job application, resume, email, or otherwise), NoFullTime does not
													have control over the Employer’s use or disclosure of that
													information. If you want to request the Employer delete, modify, or
													maintain confidence over any such information, you must make such a
													request directly to the Employer.
													NoFullTime may use your application materials to determine whether
													you may be interested in a Job Listing, and NoFullTime may reach out
													to you about such Job Listing.
													NoFullTime may store such information regardless of whether a Job
													Listing has been closed or is no longer available on the Site.
													To maintain the quality of the Site and Services, NoFullTime in its
													sole discretion may impose limits on your ability to apply to Job
													Listings or to other NoFullTime services.
													In addition, when you indicate your interest in a Job Listing
													through NoFullTime Apply or by RSVPing to a hiring event you are
													sending your resume and application information to NoFullTime, and
													you are requesting and authorizing NoFullTime to make available such
													application information to the applicable Employer(s) for such Job
													Listing(s).
													When you ask NoFullTime to transmit an application or a message,
													including, but not limited to, a signed offer letter, to an Employer
													via NoFullTime Apply or NoFullTime’s relay system, or store such
													application, you understand that this is without warranty, and that
													NoFullTime reserves the right to reformat such application or
													message.</p>
												<p>You acknowledge and agree that Employers may request that NoFullTime
													assemble your application materials, resume, answers to screener
													questions, assessment responses and other information you provide to
													NoFullTime into one document, and you agree that in doing so,
													NoFullTime assembles these application materials on your behalf.
													When you apply for a job on NoFullTime you agree to NoFullTime’s
													performance of automated processing in relation to your application,
													as such processing is an essential part of this Agreement.
													Additionally, you consent to your application and any responses sent
													to you by the Employer (including offer letters) through NoFullTime
													being processed and analyzed by NoFullTime according to this
													Agreement and NoFullTime’s Privacy Policy.</p>
												<p>When you apply to a job using NoFullTime Apply, NoFullTime will
													attempt to send your application to the contact information provided
													to us by an Employer or their Agent.
													We cannot guarantee that such messages and applications will be
													delivered, received, accessed, read or acted upon.
													NoFullTime also does not guarantee that any Employer will receive,
													be notified about, access, read or respond to any such resume or
													other application material, or that there will be no mistakes in the
													transmission or storage of the data.
													However, NoFullTime may alert you when any of the above events
													occur.
													Please note that Job Listings may expire between the time you submit
													your application and from the time it is received.
													NoFullTime has no responsibility for expired Job Listings or for
													delivering applications prior to a Job Listing’s expiration.&nbsp;In
													addition we cannot vouch for the validity of the contact information
													provided to us by Employers.
													We also cannot vouch for the technical capabilities of any third
													party sites, including but not limited to Applicant Tracking Systems
													(ATSs).
													If you do not feel comfortable sending an application or messages in
													this manner, or having your application or messages stored on
													NoFullTime, do not use the NoFullTime Apply or NoFullTime relay
													functions and please send your application or messages directly to
													the Employer by whatever other method you so choose, including the
													public mail system.
													You may contact the Employer directly to find alternative methods of
													application if you do not wish to apply through NoFullTime. By using
													the NoFullTime Apply system, you fully consent to the above.</p>
												<p>If you require alternative methods of screening or application you
													must approach the Employer directly to request such as NoFullTime is
													not responsible for the Employer application process.</p>
												<p>By using NoFullTime you agree that NoFullTime is not responsible for
													the content of the Employer’s job application, messages, screener
													questions, skills assessments or their format or method of delivery,
													and that NoFullTime does not guarantee receipt of your application
													by the Employer, or your receipt of messages from the Employer.
													Please note that NoFullTime does not choose the questions asked by
													Employers or decide the job qualification criteria of Employers.
													Some questions may be labeled as Optional, indicating only that the
													application may be submitted to the Employer without providing an
													answer.
													NoFullTime cannot guarantee that the Employer will consider such an
													application or make a particular determination with regard to such
													an application.
													NoFullTime may inform Job Seekers that an Employer’s requirement
													from a job description does not appear to be present on a resume or
													application; this information is presented without warranty and
													NoFullTime does not guarantee that updating a resume or application
													will result in any job offer.
													NoFullTime does not guarantee the identity of an Employer or any
													individuals working for any Employers, and cautions Job Seekers when
													applying to jobs. NoFullTime cannot make any
													guarantee&nbsp;regarding health and safety measures in an Employer’s
													hiring or interviewing process.
													NoFullTime recommends Job Seekers follow personal health and safety
													best practices as recommended by the World Health
													Organization&nbsp;or similar institution.
													&nbsp;<strong>NoFullTime does not guarantee the validity of a job
														offer and cautions Job Seekers to verify the validity of a job
														offer before taking an adverse action regarding their current
														employment situations.
														Job Seekers are solely responsible for verifying the accuracy of
														any Employer or job offer.</strong></p>
												<p>NoFullTime may send you a notice relating to account security, such
													as informing you that you may have recently interacted with a
													compromised account.
													NoFullTime cannot and does not guarantee that such notices will
													always be sent or received, and you therefore agree that NoFullTime
													bears no responsibility for doing so.
													NoFullTime makes no warranty regarding, and disclaims any liability
													for, the accuracy, completeness, timeliness, or reliability of such
													notices.</p>
												<p>NoFullTime may use your application materials (including resumes and
													responses to screener questions) and the recency of your activity on
													NoFullTime to determine whether the words of any Job Seeker’s resume
													and answers to screener questions match the words of a Job Listing
													or Resume query, and vice-versa.
													You agree and consent that NoFullTime may differentiate those
													matching resumes and screener questions from those that do not
													match, and present them to Employers as matches or not matches.
													NoFullTime may also use such information in order to improve the
													Site or any other NoFullTime product or service (including by
													displaying or otherwise making available potentially relevant Job
													Listings and resumes to Job Seekers and Employers).
													NoFullTime may also highlight to you items in your prior application
													materials (including items in your resume and past responses to
													screener questions) that may match qualifications from the Job
													Listing, or highlight to you items that appear in the Job Listing
													that may not match your application materials.
													These highlights do not mean you are or are not qualified for the
													job or that you should or should not apply for it.
													Applying for such Job Listings does not guarantee job interviews or
													hiring.
													Even where NoFullTime highlights items or a Job Listing is shared
													with you, NoFullTime assumes no responsibility, and disclaims all
													liability for the content, accuracy, completeness, legality,
													reliability, or availability of Job Listings or highlights.</p>
												<p>By using NoFullTime Apply and answering screener questions, you
													acknowledge that Employers may have instructed NoFullTime to send
													out rejection notices if your answers do not match the answers
													sought by the Employer, and you acknowledge that NoFullTime has no
													discretion in the transmission of these rejections.
													NoFullTime may offer Employers the ability to activate a feature on
													their account called Employer Assist.
													Activating Employer Assist means the Employer is instructing
													NoFullTime to send a message on the Employer’s behalf to the Job
													Seeker informing them that the Employer has determined not to move
													forward with their application.
													These notices are automatically sent after a period of time selected
													by the Employer, unless the Employer indicates to NoFullTime their
													interest in your application.
													You acknowledge and agree that NoFullTime has no discretion in the
													sending of these messages, and that any such messages are solely a
													result of the Employer’s decision to activate Employer Assist and to
													not take an action on your application on NoFullTime within the time
													period selected by the Employer.
													Any interactions the Employer has directly with you and not through
													a tool provided by NoFullTime (for example, calling or emailing you
													directly instead of through an NoFullTime Relay Service) are not
													visible to NoFullTime, and would not by themselves prevent an
													Employer Assist rejection notice from being sent.</p>
												<p>When you search for jobs on the NoFullTime Job Search app and proceed
													to apply for a job, including jobs on third party sites, NoFullTime
													may suggest information from your NoFullTime profile to include in
													your application.
													It is your responsibility to review suggestions before accepting
													them and including them on your application.&nbsp;</p>
												<h4>4. Communications and Other Actions on the Site</h4>
												<p>When you view, send, store or receive materials (including Job
													Listings, resumes, messages, applications, questions and responses
													in applications, and any other information) through or using the
													Site, NoFullTime may, for example, use such materials for data
													analysis, quality control, or to refine the Site or any other
													NoFullTime product or service (including to provide better search
													results and other listings for Job Seekers and Employers), whether
													via automated means or otherwise. When an Employer views, sends,
													stores or receives materials through or using the Site, NoFullTime
													may inform you about such actions. Additionally, we may also inform
													you that an Employer has taken other actions with regards to a Job
													Listing, your Resume, or your application, such as pausing or
													closing a Job Listing, opening your Resume or application, viewing
													your Resume or application, responding to your Resume or
													application, and making a decision with regards to your application
													or Job Listing.
													NoFullTime may inform the Employer about activities you take on the
													Site or your use of the Site, for example, whether you are online on
													NoFullTime, and you hereby consent to NoFullTime taking such
													actions.</p>
												<p>If you have turned on browser push notification and wish to turn them
													off, you may do so by visiting the settings on your browser.</p>
												<p>NoFullTime may offer you the opportunity to receive a text message
													interview reminder from NoFullTime when an Employer has scheduled
													interviews with you.
													In such an event you will enter your phone number on the NoFullTime
													consent form and by entering your phone number you are representing
													and confirming it is your phone number and that you have the right
													to accept text messages at the number.
													NoFullTime will only send you a text message reminder for such
													interview and you agree to accept such text message reminder on your
													cell phone, including messages sent by automated telephone dialing
													system. Please note that since these text message services depend on
													the functionality of third-party providers, there may be technical
													delays on the part of those providers. We also cannot vouch for the
													technical capabilities of any third parties to receive such text
													messages.</p>
												<p>NoFullTime may also insert functionality into messages relating to
													your application allowing you to place calls directly to third
													parties.
													Please note this functionality is provided solely as a courtesy and
													that such calls are not placed through or tracked by NoFullTime.
													Your standard calling rates with your phone provider will apply.</p>
												<p>You may receive messages, including but not limited to text messages,
													emails or email notifications corresponding with your or an
													Employer’s (in the event you applied for a job) activity on or use
													of the Site, NoFullTime Apply, NoFullTime Chat, or any other
													communications service, product, or feature provided on or through
													the Site. In all cases, such messages or notifications are provided
													solely as a courtesy, and you should not rely on them.
													For example, if you accept an interview request, it is your
													responsibility to follow up with the employer separately to ensure
													they know your response, do not rely on notifications through
													NoFullTime. NoFullTime may use your email address to create an alias
													email address for your communication, in lieu of displaying your
													actual email address to the Employer. Once an Employer has your
													contact info, you agree that NoFullTime is not responsible or liable
													for the manner in which the Employer uses the info. Should you
													choose to send an email from a third party email client, the person
													with whom you’re communicating may be able to see your email
													address, rather than the alias. NoFullTime disclaims all warranties
													with regards to the transmission or storage of such courtesy
													notices, does not guarantee their delivery or receipt, and does not
													guarantee the date or time at which they may be sent. In the event a
													message being sent is intended for a closed account, these messages
													will not be deliverable.</p>
												<p>NoFullTime may enable chatbots, which allows you to take certain
													actions on the Site, such as apply to a job, schedule an interview,
													or otherwise interact with the Site, Employers, or Job Listings on
													our Site (“Chatbot”). You understand that the Chatbot is an
													automated service that does not involve human interaction. It is
													your responsibility to ensure the accuracy and completeness of
													information submitted through the Chatbot. NoFullTime is not
													responsible for any loss, damage or inconvenience arising as a
													consequence of the use (or inability to use) the Chatbot or from the
													information you submit via the Chatbot.</p>
												<p>NoFullTime reserves the right to turn on or enable NoFullTime Chat or
													other communication options for select Employers or Job Listings, in
													its sole discretion, and to notify you that NoFullTime Chat or other
													communication options are available for a particular job or
													Employer.
													For NoFullTime Chat, you may access or view your messages by
													visiting your NoFullTime Chat messages dashboard. NoFullTime may, in
													its sole discretion, turn off or disable NoFullTime Chat for any
													Employer or Job Seeker at any time without prior notice.
													Please note that if you are using NoFullTime Chat to communicate
													with an Employer, NoFullTime will deliver your messages as
													instructed by the Employer.</p>
												<h4>5. Virtual Communications</h4>
												<p>Employers may offer you the opportunity to participate in virtual and
													remote communications using NoFullTime products, including but not
													limited to, NoFullTime Interview, NoFullTime Hiring Platform, phone
													interviews, virtual meetings, and video interviews (“Virtual
													Interviews”). You understand that NoFullTime is not a
													telecommunications service provider and that NoFullTime is only
													providing the option for you to communicate with Employers via
													services that may be offered by third-party providers.
													Please note that since these telecommunication services may depend
													on the functionality of third-party providers, there may be
													technical delays or malfunctions on the part of those providers. We
													cannot vouch for the technical capabilities of any third parties to
													receive, transmit, or support such phone or video communications.
													NoFullTime does not guarantee any aspect of your Virtual Interview
													experience including transmission of phone or video communications,
													quality of audio/visual content, data security, or data usage and
													restrictions.
													<strong>NoFullTime is not liable for any claims arising out of your
														use of Virtual Interviews and you release NoFullTime from any
														such claims.</strong>
													<br> You understand that NoFullTime does not guarantee the
													Employer’s schedule or availability for conducting Virtual
													Interviews and cannot vouch for the validity of the contact
													information provided to us.
													You also understand that the Employer is responsible for any and all
													questions, comments, or hiring decisions made. Further, Employers
													are responsible for any accommodations you need during Virtual
													Interviews.
												</p>
												<p>YOU UNDERSTAND AND AGREE THAT THERE IS NO PROTECTION FOR ANY
													INFORMATION YOU SHARE OR DATA THAT YOU TRANSMIT WHILE PARTICIPATING
													IN VIRTUAL INTERVIEWS INCLUDING, BUT NOT LIMITED TO, AUDIO/VISUAL
													CONTENT, INTERVIEW QUESTIONS AND ANSWERS, OR YOUR IMAGE OR LIKENESS.
													YOU ACKNOWLEDGE AND AGREE THAT NOFULLTIME IS NOT RESPONSIBLE FOR
													SECURING OR PROTECTING ANY DATA OR INFORMATION THAT YOU SHARE OR
													TRANSMIT DURING YOUR USE OF VIRTUAL INTERVIEWS. NOFULLTIME ASSUMES
													NO LIABILITY FOR THE MISUSE OF ANY DATA YOU SHARE OR TRANSMIT
													THROUGH USE OF VIRTUAL INTERVIEWS.</p>
												<p>YOU UNDERSTAND AND AGREE THAT YOU ACCESS AND USE VIRTUAL INTERVIEWS
													AT YOUR OWN DISCRETION AND RISK AND THAT NOFULLTIME DISCLAIMS ALL
													LIABILITY ARISING OUT OF YOUR USE OF VIRTUAL INTERVIEWS.</p>
												<h4>6. Salary, Career, Hiring and Other Information Provided by
													NoFullTime</h4>
												<p>NoFullTime may provide some information and content to users for
													informational purposes only.
													For example, NoFullTime may provide you with data regarding
													estimated salaries for a given Job Listing, number of applies to a
													Job Listing, responses to certain screener questions for a Job
													Listing, or the likelihood that a particular event will occur such
													as being selected for an interview.
													This information provided by NoFullTime is based on estimates given
													for informational purposes only and without warranty, and is subject
													to change or varying levels of accuracy.
													NoFullTime may also include salary estimations on pages other than
													Job Listings on the Site. Please note that all salary figures are
													approximations based upon multiple third party submissions to
													NoFullTime.
													These figures are given to NoFullTime users for the purpose of
													generalized comparison only.
													Minimum wage may differ by jurisdiction and you should consult the
													employer for actual salary figures.
													NoFullTime may also display publicly available information about
													employers on Company Pages.
													Information on Company Pages is presented for informational and
													promotional purposes only, is subject to change, and may be gathered
													from or generated by third parties.
													NoFullTime assumes no responsibility, and disclaims all liability
													for the content, accuracy, completeness, legality, reliability, or
													availability of any Company Page.
													Please contact the employer for the most accurate and up-to-date
													company information.</p>
												<p>Similarly, career-related or hiring-related information provided by
													NoFullTime is for informational purposes only, and is in no way to
													be construed as professional career counseling or staffing services
													<span style="font-weight: 400;"></span>.
													You understand that NoFullTime may give suggestions or information
													regarding best-practices, however, you understand that it is
													ultimately your responsibility to determine how to pursue your job
													search or candidate search.
													You further understand that in providing any such career or hiring
													guides, NoFullTime is not acting as a job placement agency or
													staffing firm <span style="font-weight: 400;"></span>.
													You also understand that by referring to or using such career or
													hiring guides, you are not guaranteed job interviews, job placement,
													or assurance of being hired, and you take full responsibility for
													use of these services or guides. As a user of the Site, NoFullTime
													may, from time to time, send you emails from the career or hiring
													guides as part of its services to you. These emails may include but
													not be limited to, tips on improving your resume or how to use your
													resume effectively in the job application process, commonly asked
													interview questions, next steps after you have submitted an
													application, and how to prepare for a new job after you have been
													hired.
												</p>
												<p>NoFullTime may offer, as part of the Services, the opportunity for
													you to engage with third parties, sometimes referred to as career
													coaches&nbsp;or professional writers, to discuss job
													search,&nbsp;resume writing, or&nbsp;career strategies, either
													through the Site or in person.
													Regardless of how you interact with them, you acknowledge that these
													third parties are not employees of NoFullTime and that NoFullTime is
													not responsible for the content of any such discussion. Do not share
													any information you consider confidential or personally sensitive
													with these third parties.
													NoFullTime does not guarantee the quality or effectiveness of any
													advice, recommendations, or guidance you may receive from these
													third parties.
													You agree that, to the maximum extent permitted by law, NoFullTime
													will have no liability arising from any discussion you have with
													such a third party.</p>
												<h4>7. Your Job Seeker Data</h4>
												<p>As a Job Seeker, you take a variety of actions on our Site and you
													provide various information.
													For example, you search for jobs, and NoFullTime knows and stores
													the titles of jobs you search for and click on, where those jobs are
													located, the general salary range or experience level of the jobs
													you view (if indicated on the Job Listings), the Job Listings you
													apply to, your amount of activity or time of most recent activity on
													NoFullTime, information you provide directly to NoFullTime including
													desired salary, or past experience, or <span style="font-weight: 400;">any information in your NoFullTime
														Profil</span>e, or any of your other behavior on the Site or
													information provided. You know exactly what this data is because you
													are the person who provided the information or undertook the
													activity and the data pertains only to your activity.
													If you have an NoFullTime account or a Job Seeker Resume, you agree
													that NoFullTime may associate this data with your NoFullTime Profile
													and use this observed factual data to suggest jobs to you and to
													suggest you or your public resume to Employers that might be
													interested in a person who matches your behavior on NoFullTime.
													You also agree that NoFullTime may contact you based on this
													observed behavior or provided info on behalf of Employers or
													NoFullTime itself.
													Please note, the aforementioned actions do not include information
													sent to you by a third party, however, NoFullTime may publicly
													display the fact that you have recently used the NoFullTime Site to
													correspond with a third party. <strong>In addition, if you set Your
														Resume to public, this means that NoFullTime may share all of
														the aforementioned information about yourself with third-party
														Employers.
														If you do not wish to share such information, you may set Your
														Resume to private. <span style="font-weight: 400;">When you make
															changes to your NoFullTime Profile, including, but not
															limited to, updating, deleting, or changing settings on Your
															Resume, it may take a few days for the changes to be
															reflected.</span></strong></p>
												<p>In addition, you may have the opportunity to provide NoFullTime with
													certain demographic information about yourself, such as your race
													and ethnicity, gender, age, LGBTQ+ community membership, and
													disability status (“Demographic Information”).
													By choosing to provide your Demographic Information, you agree that
													NoFullTime may use it to evaluate and improve our products, and
													share aggregate summaries of job seeker information with employers.
													If you do not want your Demographic Information to be used in this
													way, do not provide it to NoFullTime (or, if you have already
													provided your Demographic Information to NoFullTime, you can request
													it be removed).
													You further acknowledge and agree that another Job Seeker’s
													Demographic Information is personal information, and to the extent
													permitted by law you waive any right to request or view Demographic
													Information pertaining to any other Job Seeker.&nbsp;</p>
												<h4>8. Screening Tools</h4>
												<p>NoFullTime may make screening tools available to Employers for
													Employer use in the application process, including screener
													questions, phone screen tools and assessments. NoFullTime is
													licensing these tools for Employers’ use as determined by Employers.
													As a Job Seeker you agree that the Employer has made the
													determination to use these tools as part of its application process,
													and the questions asked are solely determined by the Employer, and
													are not being asked by NoFullTime. The Employer is the sole party to
													determine which answers will qualify a candidate and is solely
													responsible for the use of the screening tool including any results
													which are considered to have a “disparate impact”. evelop accessible
													offerings, as outlined in the accessibility statement.</p>
												<h4>9. NoFullTime Hiring Platform</h4>
												<p>NoFullTime Hiring Platform is a platform designed to automate and
													streamline Employer hiring and employment decision-making processes
													by allowing users access to various products such as NoFullTime
													Interview, or related services (“NoFullTime Hiring Platform”).
													Employers may offer you the opportunity to participate in hiring
													activities that might be supported by NoFullTime Hiring Platform.
													You acknowledge and understand that Employers select the method and
													manner that NoFullTime Hiring Platform will be used for its job
													openings and that the Employer determines the job requirements and
													specific needs of its hiring efforts.
													YOU UNDERSTAND AND AGREE THAT EMPLOYER IS RESPONSIBLE FOR COMPLYING
													WITH APPLICABLE LAW REGARDING ITS EMPLOYMENT AND HIRING PRACTICES,
													INCLUDING TITLE VII, AND THAT EMPLOYER INDEMNIFIES NOFULLTIME
													AGAINST ANY AND ALL CLAIMS ARISING FROM EMPLOYER’S USE OF NOFULLTIME
													HIRING PLATFORM OR SIMILAR PRODUCTS. NOFULLTIME DISCLAIMS ALL
													LIABILITY AND MAKES NO WARRANTY THAT EMPLOYER’S USE OF THE SERVICES
													COMPLIES WITH TITLE VII OR ANY SIMILAR LAW.&nbsp; NoFullTime has no
													control nor participates in the hiring or decision-making process
													regarding Employer hiring efforts. Further, you understand that
													NoFullTime is not an employment agency by offering NoFullTime Hiring
													Platform and related tools. By using NoFullTime Hiring Platform, you
													understand that NoFullTime is not procuring employees for Employer
													or opportunities for Job Seekers. NoFullTime merely provides
													NoFullTime Hiring platform as a tool that enables Employers and Job
													Seekers to exchange information as they determine.</p>
												<h4>10. Governing Law and Dispute Resolution</h4>

												<h4>11. Class Action Waiver</h4>
												<p>By using the Site and in return for the services offered by
													NoFullTime, you acknowledge that NoFullTime can only offer you these
													services under the terms and conditions as presented herein. As
													partial consideration for your use of the Site and these services,
													you agree not to sue NoFullTime as a class plaintiff or class
													representative, join as a class member, or participate as an adverse
													party in any way in a class-action lawsuit against NoFullTime
													regarding your use of the Site. Additionally, as a Job Seeker, your
													use of job search on the Site is at no charge and you acknowledge
													that part of the price you are paying to use this Site is your
													acceptance of these terms of service including this Class Action
													Waiver.
													If you do not agree to any part of these terms, do not continue your
													use of the Site.
													Nothing in this paragraph, however, limits your rights to bring a
													lawsuit as an individual plaintiff, including in small claims court,
													subject to Section 11 above.</p>
												<div id="i4c-dialogs-container">
													&nbsp;
												</div>
									</div>
								</div>

								<div class="has-jumplink" id="employers">
									<h3>B. Terms of Service for Employers</h3>
									<p>The following terms and conditions apply to all Employers and other users who
										access or use the Site as intended for individuals and/or organizations seeking
										to make available information regarding employment openings, on their behalf or
										other’s behalf, including but not limited to agencies purchasing for multiple
										parties, or otherwise indicate their acceptance to this Agreement.
										For purposes of this Section B of the NoFullTime General Terms of Service, all
										references to “you” or “your” shall mean you, the individual or organization
										accessing this Site in your capacity as an Employer.</p>
									<h4><strong>1. Employer Accounts</strong></h4>
									<p>When you create an NoFullTime account, a Company Page or post job listings
										advertising employment opportunities and other job-related contents, including
										links to third-party websites (“Job Listings”) on the Site, whether as part of
										the NoFullTime Listings Program or otherwise, you agree that this Agreement, the
										terms associated with any NoFullTime service you are using, and all of
										NoFullTime’s policies, including the NoFullTime Privacy Policy and Cookie
										Policy, apply to you.</p>
									<p>As an Employer, your account is for business use and not for personal use.
										NoFullTime is not responsible for and disclaims all liability if your email is
										used improperly or falsely by a third party. By registering for an NoFullTime
										account, you agree to receive mandatory email updates regarding anomalous
										activity to your NoFullTime account. If you attempt to send an email from a name
										or email address that is not true, accurate, current or complete, we reserve the
										right to drop such email, and attempting to send such email is a violation of
										our terms.</p>
									<p>In some instances, multiple users may be linked to the same account (“a Linked
										Account”).
										A Linked Account is created when the primary account owner(s) (“Admin(s)”) of an
										Employer account invites other users to the same account.
										Admin(s) can provide these other users varying levels of access and
										functionality (“Roles”) within the account, as described on the
										site,&nbsp;including but not limited to accessing account data or purchasing
										services from NoFullTime under such account. If you are an Admin adding a user
										to a Role or several Roles, you represent to NoFullTime that you are an
										authorized representative of this account and that you have the authority to
										allow this data and access to be shared. You further agree to indemnify and hold
										harmless NoFullTime from any allegations, claims, actions, suits, demands,
										damages, liabilities, obligations, losses, settlements, judgments, costs and
										expenses (including without limitation attorneys’ fees and costs) that result
										from the sharing of this data, access to your account, and any purchases made
										under your account. You agree that NoFullTime assumes no liability in regards to
										the accuracy of the statements above and that you are fully responsible for said
										accuracy. When using a Linked Account, any users with access to certain Roles
										may have access to any or all account information, including but not limited to:
										communications and actions of all other users and applicants within the Linked
										Account, resume contacts, and billing information, and you consent to such
										access. When using a Linked Account, any users with access to certain Roles may
										also have the ability to purchase NoFullTime products under your account, and
										you agree that you are responsible for the payment of all such purchases made.
									</p>
									<p>If your NoFullTime employer account has a credit card on file to pay for one
										NoFullTime product or service, NoFullTime may charge that card for any
										additional products or services you order.</p>
									<p>You agree that NoFullTime may send notices to Job Seekers informing them that an
										Employer account has been compromised, including if such account is associated
										with you.
										NoFullTime cannot and does not guarantee that such notices will always be sent
										or received, and you therefore agree that NoFullTime bears no responsibility for
										doing so.
										NoFullTime makes no warranty regarding, and disclaims any liability for, the
										accuracy, completeness, timeliness, or reliability of such notices.</p>
									<h4><strong>2. Employer Services Including NoFullTime Apply and Screener
											Questions</strong></h4>
									<p>You also agree that, as a service to Job Seekers, NoFullTime may activate its
										NoFullTime Apply relay function for use in connection with your Job Listings,
										and that any Job Seekers who wish to indicate an interest in such Job Listing
										may only do so through NoFullTime Apply, and that NoFullTime will send
										applications to the email address you provide us with. You also agree that
										NoFullTime may activate a chat bot, which enables Job Seekers to apply to your
										Job Ad by answering questions. The answers a Job Seeker submits are presented to
										you as a job application. When you use NoFullTime candidate management tools,
										including but not limited to your Employer Dashboard, or by activating the
										NoFullTime Apply relay function for your Job Listings, you acknowledge and agree
										that NoFullTime may make available functions allowing you to take actions
										regarding the Job Seeker, such as tools for setting up an interview, viewing a
										resume and rejecting a candidate. You agree that by using such candidate
										management tools, you are instructing NoFullTime to assemble the candidate’s
										application materials, resume, answers to screener questions, assessment
										responses and other information you provide to NoFullTime into one document. You
										further agree that NoFullTime is not responsible for maintaining or storing such
										application materials, and that you are responsible for your own compliance with
										any applicable record retention requirements. By using these tools, you are
										providing information to NoFullTime and requesting and authorizing us to make
										available such information to the applicable Job Seeker. For example, when you
										choose whether a qualification is preferred or required (including marking it as
										a deal breaker), this information may be highlighted to Job
										Seekers.&nbsp;Additionally, you consent to any information shared through
										NoFullTime being processed and analyzed by NoFullTime according to this
										Agreement and NoFullTime’s Privacy Policy. NoFullTime may store such information
										regardless of whether a job vacancy has been filled.</p>
									<p>You are responsible for the contents of your emails, application form, screener
										questions or their format, Company Pages that you create, any Job Listings that
										you post, and any messages that you send through NoFullTime Apply or otherwise,
										and agree that NoFullTime is not responsible for such content and disclaims all
										liability for such content, including as to whether such content is legal. You
										agree that NoFullTime may reject or remove any Job Listing, any part of any
										Company Page, or any questions for Job Seekers for any or no reason. NoFullTime
										further does not guarantee delivery, your receipt of the Job Seeker’s emails or
										application materials, or that there will be no mistakes in the transmission or
										storage of the data. You are solely responsible for checking your Employer
										dashboard to view job applications and other information. Any notifications,
										such as emails, you may receive about applications or other activities, are
										provided solely as a courtesy to you and you should not rely on them.</p>
									<p>In the event a message being sent is intended for a closed account, these
										messages will not be deliverable. If you do not feel comfortable sending a
										message, including but not limited to an offer letter, to a Job Seeker through
										NoFullTime’s relay functions, do not use the NoFullTime relay functions and
										please contact the Job Seeker via the personal information provided in such Job
										Seeker’s resume or application or by whatever method you so choose. When using
										the NoFullTime Apply function, NoFullTime will attempt to send applications to
										the contact information provided to NoFullTime by you, however, NoFullTime has
										no ability to verify the contact information provided by you. In the event you
										provide incorrect contact information, it shall be your responsibility to
										correct, appropriately respond, or take any steps necessary to protect the
										privacy of such Job Seekers, and you indemnify NoFullTime for any damages
										resulting therefrom.</p>
									<p>When you use the NoFullTime Apply relay function for your Job Listings, you
										acknowledge and agree that NoFullTime may add functions into the corresponding
										NoFullTime Apply emails. For example, NoFullTime may mask or hide contact
										information, such as email addresses, from resumes or applications and may
										substitute it with an alias. In addition, NoFullTime may, on your behalf, send
										out reminder emails to Job Seekers you wish to interview. NoFullTime may also
										send emails to Job Seekers on your behalf indicating that your Job Listing is
										potentially a match for the Job Seeker’s resume. When you use screener
										questions, you may be given the option to instruct NoFullTime to send out
										rejection notices if the Job Seeker has not answered the questions in the manner
										set forth in the online instruction. If you choose such option, you agree you
										are instructing us to send out rejection notices to such candidates and set them
										to rejected in your candidate dashboard. You further acknowledge that NoFullTime
										has no discretion in the transmission or storage of these or all other rejection
										notifications (which is purely mechanical), that transmission or storage is not
										guaranteed, and that the Job Seeker may not have answered the screener questions
										accurately. When you use NoFullTime’s candidate management tools, you may be
										given the option to send automatic rejection notices to candidates whose status
										you set to “rejected”. If you choose such option, you acknowledge that
										NoFullTime has no discretion in the transmission or storage of rejection
										notices.</p>
									<p>You agree that NoFullTime may take action to try to identify and reduce spam
										applications, and that one method of doing so may include imposing a cover
										letter requirement for such applicants. NoFullTime does not verify the identity
										of any Job Seekers who apply to your job listing, nor does NoFullTime know a Job
										Seeker’s motivation for applying to your job listing, and thus provides no
										guarantee as to the Job Seeker’s qualifications or interest in your job listing.
										You agree that NoFullTime Apply and NoFullTime’s relay functions are presented
										to you without warranty and NoFullTime assumes no responsibility for the
										communications between you and the Job Seeker, which communications are yours’
										and the Job Seekers’ sole responsibility.</p>
									<p>By using any automated phone screen product, you agree that you are requesting
										NoFullTime to send a Job Seeker a telephone number, which the Job Seeker may
										call with the purpose of answering your telephone screening questions. You agree
										these questions are part of your application process, are solely determined by
										you, and are not being asked by NoFullTime. You also agree that you are only
										asking NoFullTime to record the Job Seeker’s answers to your screening questions
										and that NoFullTime will forward you the recording of the answers to your
										questions. You consent to NoFullTime listening to and analyzing the recording in
										accordance with NoFullTime’s Privacy Policy. NoFullTime disclaims all warranties
										with regards to the transmission or storage of such phone screens and responses,
										does not guarantee their delivery or receipt, and does not guarantee the date or
										time at which they may be sent.</p>
									<p>You shall indemnify, defend and hold harmless NoFullTime, its agents, affiliates,
										and licensors from any third-party claim or liability (including without
										limitation reasonable legal fees) arising out of any Company Page created or
										claimed by you, or any Job Listing or screener questions (or answers thereto)
										posted by you, or any message sent by you (including any questions for Job
										Seekers contained in any of the foregoing).
										NoFullTime may make Job Listing analytics data available on a Company Page or
										elsewhere on the Site, and may provide analytics data regarding your Employer
										account to anyone at your company at NoFullTime’s discretion. To the extent
										permitted by law, if you have an unpaid or outstanding invoice or account
										balance for any NoFullTime product, NoFullTime reserves the right to suspend or
										terminate your use of that NoFullTime product as well as any other NoFullTime
										product, including but not limited to those NoFullTime products where you do not
										have an unpaid invoice or account balance. NoFullTime may elect to apply (i)
										penalties for late payment as per contemporaneous US Federal Reserve interest
										rates plus 10% or the maximum interest permitted by law, whichever is lower and
										(ii) a statutory lump-sum indemnity for recovery cost, if provided for under
										applicable laws, and (iii) any reasonable expenses and attorney fees NoFullTime
										incurs collecting such late payments.</p>
									<p>When you view, send, store or receive materials (including Job Listings, resumes,
										and messages) through or using the Site, NoFullTime may, for example, use such
										materials for data analysis, quality control, or to refine the Site or any other
										NoFullTime product or service (including to provide better search results and
										other listings for Job Seekers and Employers), whether via automated means or
										otherwise. When you view, send, store or receive materials through or using the
										Site or when you simply use or visit the Site, NoFullTime may inform a Job
										Seeker that you have taken an action, for example, with regards to a Job Ad, Job
										Seeker’s Resume, or application such as pausing or closing a Job Ad, opening the
										Resume or application, viewing the Resume or application, responding to the
										Resume or application, and making a decision with regards to the application or
										Job Ad, and you hereby consent to NoFullTime taking such actions.</p>
									<p>NoFullTime, in its sole discretion, may add labels or badges to Employer names or
										Job Listings, such as, “Responsive Employer” or “Active Employer” or “Hired on
										NoFullTime”.
										Employers may also request that NoFullTime add such labels.
										NoFullTime shall determine the method by which such labels or badges are
										determined or which Employers qualify.
										The lack of a label or badge may indicate that NoFullTime does not have
										sufficient data to determine if an Employer qualifies.</p>
									<h4><strong>3. Job Match</strong></h4>
									<p>NoFullTime may use Job Seekers’ application materials (including resumes and
										responses to screener questions) and the recency of their activity on NoFullTime
										to determine whether the words of their resume and answers to screener questions
										match the words of your Job Listing or Resume query, and vice-versa. You further
										agree and consent that NoFullTime may differentiate those matching resumes and
										screener questions from those that do not match, and present them to you as
										matches or not matches. NoFullTime may also use such information in order to
										improve the Site or any other NoFullTime product or service (including by
										displaying or otherwise making available potentially relevant Job Listings and
										resumes to Job Seekers and Employers).</p>
									<h4><strong>4. Salary, Applies or Other Information Provided by NoFullTime</strong>
									</h4>
									<p>NoFullTime may provide some information and content to users for informational
										purposes only. For example, NoFullTime may provide Job Seekers with data
										regarding estimated salaries for a given Job Listing, number of applies to a Job
										Listing, responses to certain screener questions for a Job listing, or provide
										you with estimated applies to your Job Listing. All such figures provided by
										NoFullTime are estimates given for informational purposes only, and they are
										subject to change or varying levels of accuracy. With respect to information
										regarding estimated applies, if you are participating in the NoFullTime Ads
										Program, please note that this is not the information you are purchasing from
										NoFullTime and you are not charged per apply. NoFullTime may also include salary
										estimations on pages other than Job Listings on the Site. Please note that all
										salary figures are approximations based upon multiple third party submissions to
										NoFullTime, including from NoFullTime affiliates. These figures are given to
										NoFullTime users for the purpose of generalized comparison only. Minimum wage
										may differ by jurisdiction and you should consult the employer for actual salary
										figures. NoFullTime may also provide data regarding impressions in relation to
										your job ad. Such figures are provided for informational purposes only, are
										subject to change at any time, and NoFullTime does not guarantee their accuracy.
										NoFullTime reserves the right to change the method of measuring such figures at
										any time.</p>
									<h4><strong>5. Screening Tools</strong></h4>
									<p>NoFullTime may make available to you&nbsp; screening tools for your use during
										the application process, including screener questions, phone screen tools and
										assessments. NoFullTime is licensing these tools to you for your use as you
										determine. By using any screening product, made available to you by NoFullTime,
										you agree that you have made the determination to use these tools as part of
										your application process, and the substantive questions you ask or choose are
										solely determined by you, and are not being asked by NoFullTime. You are the
										sole party to determine which answers will qualify a candidate. <span style="color: #000000;">You are solely responsible for the use of the
											screening tool including any results which are considered to have a
											“disparate impact”. <strong>You further acknowledge that you are responsible
												for offering alternative methods of screening, if so required by the
												Americans with Disabilities Act or any other equivalent or similar
												law.</strong> While NoFullTime is guided by WCAG 2.1, Level AA in our
											efforts to design and develop accessible offerings, as outlined in the
											accessibility statement, NoFullTime does not warrant that the method of
											delivery of these questions is compliant with the Americans with
											Disabilities Act or any equivalent or similar law. You agree to indemnify
											NoFullTime for any and all claims arising out of your use of a Screening
											Tool, including any claims that any screening tool does not comply with the
											Americans with Disabilities Act or similar or equivalent law, or that such
											Screening Tool results in a “disparate impact”.</span></p>
									<p>NoFullTime may offer Employers the ability to activate a feature on their account
										called Employer Assist. Activating Employer Assist means the Employer is
										instructing NoFullTime to send a message on the Employer’s behalf to the Job
										Seeker informing them that the Employer has determined not to move forward with
										their application. To prevent a rejection notice from being sent, you must
										indicate your interest in the application on NoFullTime. Any interactions you
										have directly with a Job Seeker and not through a tool provided by NoFullTime
										(for example, calling or emailing a Job Seeker directly instead of through an
										NoFullTime Relay Service) are not visible to NoFullTime, and will not prevent an
										Employer Assist rejection notice from being sent. If you activate Employer
										Assist then you must interact with a Job Seeker through a tool provided by
										NoFullTime to prevent an Employer Assist rejection notice from being sent. If
										you activate Employer Assist you agree that you are instructing NoFullTime to
										send these messages to candidates with whom you do not interact within your
										chosen time frame, and you agree to indemnify NoFullTime from any claims arising
										therefrom. You further agree that NoFullTime may notify Job Seekers about the
										estimated time frame during which they may expect to hear back from you based on
										the time frame you choose in Employer Assist.</p>
									<h4><strong>6. Communication through NoFullTime</strong></h4>
									<p>You may receive messages, emails or email notifications corresponding with your
										or a Job Seeker’s activity on or use of the Site NoFullTime Apply, NoFullTime
										Chat, or any other communications service, product, or feature provided on or
										through the Site. In all cases, such messages or notifications are provided
										solely as a courtesy, and you should not rely on them. For example, if you wish
										to interview a Job Seeker, it is your responsibility to follow up with the Job
										Seeker separately to ensure they know about the interview, do not rely on
										notifications through NoFullTime. NoFullTime may use your email address to
										create an alias email address for your communication, in lieu of displaying your
										actual email address to the Job Seeker. Once a Job Seeker has your contact info,
										you agree that NoFullTime is not responsible or liable for the manner in which
										the Employer uses the info. Should you choose to send an email from a third
										party email client, the person with whom you’re communicating may be able to see
										your email address, rather than the alias. NoFullTime disclaims all warranties
										with regards to the transmission or storage of such courtesy notices, does not
										guarantee their delivery or receipt, and does not guarantee the date or time at
										which they may be sent. In the event a message being sent is intended for a
										closed account, these messages will not be deliverable.</p>
									<p>Specifically, if you post a Job Listing directly on NoFullTime, applications are
										sent only to your NoFullTime dashboard; any other notifications you may receive
										are provided solely as a courtesy to you. For example, you may not receive
										application email notifications if a Job Seeker has not answered screener
										questions correctly, although these applications will be sent to your NoFullTime
										dashboard. NoFullTime reserves the right to turn on or enable NoFullTime Chat or
										other communication options for select Employers or Job Listings, in its sole
										discretion, and to notify Job Seekers that NoFullTime Chat or other
										communication options are available for a particular job or Employer. For
										NoFullTime Chat, you may access or view your messages by visiting your
										NoFullTime Chat messages dashboard. If you do not wish to use NoFullTime Chat,
										you may turn it off by visiting your NoFullTime Chat dashboard. NoFullTime may,
										in its sole discretion, turn off or disable NoFullTime Chat for any Employer or
										Job Seeker at any time without prior notice.</p>
									<h4><strong>7. Virtual Communications&nbsp;</strong></h4>
									<p>NoFullTime may offer you the option to manage virtual and remote communications
										with Job Seekers within NoFullTime products, including but not limited to,
										NoFullTime Interview, NoFullTime Hiring Platform,&nbsp;phone interviews, virtual
										meetings, and video interviews (“Virtual Interviews”). Services may include
										giving you access to scheduling, video conferencing, web conferencing, meeting
										rooms, and other collaborative services offered by third-party
										telecommunications service providers. You understand that NoFullTime is not a
										telecommunications service provider. NoFullTime disclaims all warranties with
										regards to the transmission of virtual communications. NoFullTime does not
										guarantee (1) availability of such services at the time You attempt to initiate
										them (2) the quality of such services, or (3) the dates or times you’ve arranged
										with Job Seekers for your Virtual Interview. Further, NoFullTime does not verify
										the identities or qualifications of Job Seekers with whom you arrange Virtual
										Interviews.</p>
									<p>YOU UNDERSTAND AND AGREE THAT THERE IS NO PROTECTION FOR ANY INFORMATION YOU
										SHARE OR DATA THAT YOU TRANSMIT WHILE PARTICIPATING IN VIRTUAL INTERVIEWS
										INCLUDING, BUT NOT LIMITED TO, AUDIO/VISUAL CONTENT, INTERVIEW QUESTIONS AND
										ANSWERS, OR YOUR IMAGE OR LIKENESS. YOU ACKNOWLEDGE AND AGREE THAT NoFullTime IS
										NOT RESPONSIBLE FOR SECURING OR PROTECTING ANY DATA OR INFORMATION THAT YOU
										SHARE OR TRANSMIT DURING YOUR USE OF VIRTUAL INTERVIEWS. NoFullTime ASSUMES NO
										LIABILITY FOR THE MISUSE OF ANY DATA YOU SHARE OR TRANSMIT THROUGH USE OF
										VIRTUAL INTERVIEWS.</p>
									<p>YOU UNDERSTAND AND AGREE THAT YOU ACCESS AND USE VIRTUAL INTERVIEWS AT YOUR OWN
										DISCRETION AND RISK AND THAT NoFullTime DISCLAIMS ALL LIABILITY ARISING OUT OF
										YOUR USE OF VIRTUAL INTERVIEWS.</p>
									<p>Upon your request, NoFullTime may extend invitations to additional
										representatives at your company to join in Virtual Interviews. You understand
										and agree that NoFullTime will extend such invitations on your behalf based on
										the email addresses you provide for those representatives but NoFullTime is not
										responsible for inaccuracies in the contact information you provide. Further,
										NoFullTime is not responsible, and you are solely responsible for the conduct or
										actions of your representatives. You represent that you have the authority to
										bind your additional representatives to NoFullTime’s Terms, and by extending
										invitations to your representatives, you are binding them to NoFullTime’s Terms.
									</p>
									<p>You understand that NoFullTime is only providing the option for you to
										communicate with Job Seekers via services that may be offered by third-party
										providers. NoFullTime is not a party to your Virtual Interviews and is not a
										participant in any arrangements you make with Job Seekers. NoFullTime does not
										access, record, store, or analyze video content you may conduct using
										third-party providers. You agree that you will not record, store, or analyze
										Virtual Interviews without express permission from Job Seekers and will only do
										so in accordance with all applicable laws, including state and federal. You are
										responsible for any requests for accommodations from Job Seekers. For example,
										if a sign language interpreter is requested, it is your responsibility to
										provide one if you are legally obligated to.</p>
									<h4><strong>8. Company Pages</strong></h4>
									<p><span style="font-weight: 400;">When you post a Job Ad directly on NoFullTime or
											submit a request for a landing page on NoFullTime, such as NoFullTime Next,
											NoFullTime may automatically generate for you a Company Page. You understand
											that NoFullTime may display publicly available information about your
											company on the Company Page, in accordance with applicable law. You
											authorize NoFullTime to claim such Company Page for you on your behalf,
											which will be marked as a “Claimed Profile” and allows you to edit and add
											information to the Company Page. Company Pages allow User Content (as
											defined below) to be posted by individuals that may not be affiliated with
											the Company that owns the Company Page, including but not limited to the
											answers to Q&amp;A questions on Company Pages. Additionally, NoFullTime may
											include all of your Job Ads posted on the Site on your Company Page,
											including but not limited to those posted directly on NoFullTime as well as
											those indexed by NoFullTime. You agree that you are solely responsible for
											any content you edit or put on a Company Page, whether generated by or for
											you, including but not limited to photograph(s) or videos you provide, and
											third-party websites reachable from content you put on a Company
											Page.&nbsp;</span></p>
									<p><span style="font-weight: 400;">NoFullTime may additionally offer NoFullTime
											Company Pages Premium, which includes features accessible only on a
											subscription basis and may be charged as indicated in an insertion order.
											NoFullTime reserves the right to change or remove these features at any
											time, in NoFullTime’s sole discretion. Additionally, these features may
											include analytics or other figures, which NoFullTime does not guarantee the
											accuracy of, and you are responsible for determining their suitability for
											your intended use or purpose. </span><span style="font-weight: 400;">You may
											cancel your participation in NoFullTime Premium Company Pages Program at any
											time by notifying NoFullTime. Such cancellation is generally effective at
											the beginning of the next calendar month; if you have prepaid for an annual
											subscription then cancellation is effective immediately and NoFullTime will
											provide a prorated refund of the unused subscription term, which may include
											any discounts as applicable. </span><span style="font-weight: 400;">All
											Company Pages Premium monthly subscriptions will automatically renew until
											cancelled by you. Annual subscriptions will need to be renewed each year.
										</span><span style="font-weight: 400;">You are responsible for all taxes as
											applicable and appropriate.</span></p>
									<h4><strong>9. NoFullTime Academy</strong></h4>
									<p>If you or anyone at your company is a member of NoFullTime Academy, your use of
										the Graduate logos is limited to your individual use only, and solely for
										purposes of indicating your Graduate status. Use of the Graduate logo to
										represent organizations or for commercial purposes is not permitted. Further,
										you agree and acknowledge that you will not make any representation that you are
										recruiting on behalf of NoFullTime, working for NoFullTime, or in any form of
										co-employment or contractor relationship with NoFullTime. Additionally, nothing
										contained herein shall be construed to imply a joint venture, partnership,
										principal-agent relationship or employer-employee relationship between you and
										NoFullTime, and neither Party shall have the right, power or authority to
										obligate or bind the other in any manner whatsoever, except as otherwise agreed
										to in writing. If you make any representation to the contrary, NoFullTime may
										remove you from NoFullTime Academy in its sole discretion.</p>
									<h4><b>10. HR Management Tools</b></h4>
									<p>NoFullTime may make HR management software tools available to employers and their
										employees (“HR Management Tools”). If you are an employee using any HR
										Management Tools, you agree that such use is subject to the provisions of this
										Agreement. You further acknowledge that while NoFullTime is only providing the
										HR Management Tools for your and your employer’s use, and that NoFullTime
										accepts no responsibility for such use. NoFullTime does not provide legal advice
										and cannot guarantee that your employer will configure or use any HR Management
										Tool to be in compliance with the law. Your employer retains all responsibility
										for such compliance. If you have questions or concerns about the legality or
										appropriateness of any configuration of an HR Management Tool, you must raise
										them directly with your employer.</p>
									<h4><strong>11. Governing Law and Dispute Resolution</strong></h4>
									<p>This Agreement and any Dispute arising out of or in connection with this
										Agreement or related in any way to the Site will be governed as to all matters,
										including, but not limited to the validity, construction and performance of this
										Agreement, by and under the laws of Federative Republic of Brazil, if you are
										located in Brazil; the laws of the Republic of India,
										legal?hl=en#asiaPacificList">Asia-Pacific Region*</a>; the laws of England and
										Wales if you are supported primarily by NoFullTime’s UK office; the laws of
										France if you are primarily supported by NoFullTime’s office in France; the laws
										of Italy if you are primarily supported by NoFullTime’s office in Italy; the
										laws of Italy if you are primarily supported by NoFullTime’s office in Italy;
										the laws of Ontario, Canada if you are primarily supported by NoFullTime’s
										offices in Canada; or the laws of the Republic of Ireland, if you are located
										elsewhere, without giving effect to conflicts of law principles thereof.
										Any and all actions, lawsuits, or other legal proceedings related to such
										Dispute shall be filed only in courts located in: Bangalore, state of Karnataka,
										India if you are located in India.
										Each of the Parties hereby consent to the exclusive personal jurisdiction of the
										courts located in: Bangalore, state of Karnataka, India if you are located in
										India.</p>

									<h4><strong>12. Class Action Waiver</strong></h4>
									<p>By using the Site and in return for the services offered by NoFullTime, you
										acknowledge that NoFullTime can only offer you these services under the terms
										and conditions as presented herein. As partial consideration for your use of the
										Site and these services, you agree not to sue NoFullTime as a class plaintiff or
										class representative, join as a class member, or participate as an adverse party
										in any way in a class-action lawsuit against NoFullTime regarding your use of
										the Site. If you do not agree to any part of these terms, do not continue your
										use of the Site. Nothing in this paragraph, however, limits your rights to bring
										a lawsuit as an individual plaintiff, including in small claims court, subject
										to Section 11 above.</p>
									<h4><strong>13. Extended Campaign Tools</strong></h4>
									<p>NoFullTime may offer a service to facilitate the coordination of Job Ads within
										geographically distributed businesses, such as franchises or large companies
										with many locations,&nbsp;such as NoFullTime Central or Groups (“Extended
										Campaign Tools”). You acknowledge and agree that using Extended Campaign Tools
										involves sharing a franchisee’s account information with the franchisor, or
										sharing a local office’s account information with the corporate headquarters, as
										applicable. This information may include items such as the number of your
										business locations or accounts, information about your job ads (content, clicks,
										impressions, etc.), your contact information, and your spend levels. The
										franchisor or corporate headquarters may request that NoFullTime contact its
										franchisees or local offices, respectively, by providing NoFullTime with contact
										information, and may provide the content of Job Ads to NoFullTime for use in
										connection with Extended Campaign Tools. By using Extended Campaign Tools, you
										agree to this information being shared, and you represent and warrant that i)
										all information you provide to NoFullTime is accurate, and ii) you have all
										necessary right and authorization to provide such information to NoFullTime and
										to permit NoFullTime to share it in connection with Extended Campaign Tools. You
										may request that NoFullTime grant access and control of your Extended Campaign
										Tools account to additional users. You understand and agree that by submitting
										such requests, NoFullTime will contact the users based on the information you
										provide (name, email address, and job title) and that NoFullTime is not
										responsible for verifying the users prior to completion of such requests.</p>
									<h4 id="i4c-dialogs-container">14. Candidate Import</h4>
									<div>
										NoFullTime may offer a platform that allows you to upload information about job
										applicants to NoFullTime and to interact with these individuals and direct
										NoFullTime to interact with
										these individuals on your behalf (hereafter “Candidate Import”). To the extent
										that any information You provide or otherwise make available to NoFullTime
										through our
										Candidate Import service includes Client Personal Data, you instruct NoFullTime
										to process such information on your behalf pursuant to this Agreement and the
										Data Processing
										Addendum; Client Personal Data and NoFullTime as used in this sentence shall
										have the meanings given to them in the Data Processing Addendum.
										By using Candidate Import, You represent and warrant that you have obtained all
										necessary rights and permissions from, and provided all necessary information
										and
										disclosures to, job applicants as required under applicable data protection law
										for You to provide or otherwise make available Client Personal Data to
										NoFullTime using Candidate Import, and, without limiting the foregoing, (a) no
										individual whose Personal Data you provide or otherwise make available to
										NoFullTime using Candidate Import has exercised any right or made any request to
										You that would prevent or otherwise limit your ability to share such
										individual’s Personal Data with NoFullTime for processing in connection with
										this Agreement and (b) all job applicants have consented that their data will be
										shared with NoFullTime (in accordance with NoFullTime’s Terms and Privacy
										Policy) and that NoFullTime may contact them over email as part of your hiring
										process, including requesting them to create an account with NoFullTime. You
										agree to defend and indemnify NoFullTime for any breach of the foregoing
										sentence.
										<h4><strong>15. Payments</strong></h4>
										<p>You understand that services offered by NoFullTime or supported by our Sites
											may require payment for access or continued use. Each product may have its
											own payment terms specific to the needs and function of the service and such
											terms will be agreed on the Site, in a separate agreement, insertion order,
											or as indicated by the Site between you and NoFullTime. For the avoidance of
											doubt, where a product or insertion order has product-specific payment terms
											which overlap or conflict with the payment terms in this section, you
											understand and agree that the product-specific terms will govern.&nbsp;</p>
										<p>NoFullTime may charge you in different ways depending on the service
											provided, including based on clicks, RSVPs, applies, impressions,
											subscription, and/or a platform fee, if applicable.&nbsp;<b>Charges are
												solely based on NoFullTime’s measurements, including, but not limited
												to, NoFullTime’s Apply, click, or ITA Brand Impression counts.
												NoFullTime’s determination of such impression count shall be binding.
												NoFullTime’s measurements may include measurements from third-party
												vendors. NoFullTime disclaims warranty with respect to measurements
												provided by third-party vendors. NoFullTime’s determination of the
												number, including, but not limited to, Applies, clicks or ITA Brand
												Impressions, shall be binding, even in cases where this number
												encompasses measurements provided by a third-party vendor.</b></p>
										<p>NoFullTime may transfer your prepaid funds for the use of one product towards
											your use of another product if you so request through any means of
											communication, including via phone, website or email.&nbsp; Further, you
											understand and agree that if your NoFullTime employer account has a credit
											card on file for the NoFullTime Ads Program or any other NoFullTime service,
											we will charge that same credit card for your RSVPs unless otherwise
											indicated by you.&nbsp;</p>
										<p><b>Billing Models</b></p>
										<p>For payment based on click count: you shall be charged accordingly,
											regardless of whether you set a total budget.</p>
										<p>For payment based on RSVPs: RSVPs are defined as a user completing the online
											RSVP form agreeing to attend your job event featured in any Job Ad. You
											understand that an RSVP does not guarantee that a Job Seeker will attend
											your job event(s).&nbsp;</p>
										<p>For payment based on applies: You shall be charged in accordance with the
											pricing listed in a separate agreement or insertion order between you and
											NoFullTime, and based on applies (“Applies” or “Apply”) and/or clicks if you
											are an Employer using ITA Apply, or based on impressions (“ITA Brand
											Impression” or “ITA Brand Impressions”) if you are an employer using ITA
											Brand. Applies are defined as a user visit to the agreed upon Post-Apply
											Page. ITA Brand Impressions are defined as an ad appearing on a page of the
											Site or a third party site, including, but not limited to, mobile apps,
											which page has been presented to a user. However, an ITA Brand Impression
											does not guarantee that a Job Seeker has viewed such ad. If you are an
											Employer using ITA Brand, your price per ITA Brand Impression found on any
											ITA Brand Insertion Order is defined as the cost per 1000 impressions. If
											your ITA Insertion Order does not contain an end date, you will continue to
											be billed until you contact NoFullTime and request to be removed from the
											ITA Program. If your NoFullTime employer account has a credit card on file
											for the NoFullTime Ads Program, we will charge that same credit card for
											your NoFullTime Targeted Ads.</p>
										<p>For payment based on a subscription, you will be charged as indicated in an
											insertion order or by the Site. If you purchase a subscription plan, you
											acknowledge and agree that your subscription will automatically renew and
											NoFullTime will charge you on a recurring basis until you cancel your
											subscription plan and such cancellation goes into effect, which may not be
											until the next billing cycle. Pausing your subscription does not cancel it.
											Your subscription will continue to automatically renew after being unpaused.
											Upon your request, NoFullTime may, in its sole discretion, pause your
											subscription and associated costs, and upon NoFullTime unpausing the
											subscription, it will continue for the remaining term until it expires and
											automatically renews. Details regarding the resume subscription or plan are
											available on the Site. <b>THERE ARE NO REFUNDS OR CREDITS FOR PARTIALLY USED
												BILLING CYCLES UNDER THE APPLICABLE RESUME SUBSCRIPTION PLAN. AMOUNTS
												FOR FUTURE PREPAID UNUSED BILLING CYCLES MAY RESULT IN A PRORATED REFUND
												OF THE UNUSED BILLING CYCLES, WHICH SHALL BE DETERMINED IN NoFullTime’S
												SOLE DISCRETION.</b>&nbsp;Following any cancellation, however, you will
											continue to have access to the service through the end of your current
											billing period.&nbsp;</p>
										<p><b>Billing Policy</b></p>
										<p>You acknowledge and agree that any credit card and related billing and
											payment information that you provide to NoFullTime may be shared by
											NoFullTime with companies who work on NoFullTime’s behalf, such as payment
											processors and/or credit agencies, solely for the purposes of checking
											credit, effecting payment to NoFullTime and servicing your account.
											NoFullTime may also provide information in response to valid legal process,
											such as subpoenas, search warrants and court orders, or to establish or
											exercise its legal rights or defend against legal claims. You agree that
											NoFullTime may obtain updated payment information for credit and debit cards
											through payment card networks, card issuers or other third party sources.
											You further agree that NoFullTime may use the updated card information to
											charge amounts you owe NoFullTime. NoFullTime shall not be liable for any
											use or disclosure of such information by such third parties. Invoices may be
											provided to you via electronic mail, unless otherwise specified by
											NoFullTime. To the extent permitted by law, if you have an unpaid or
											outstanding invoice or account balance for any NoFullTime product,
											NoFullTime reserves the right to suspend or terminate your use of that
											NoFullTime product as well as any other NoFullTime product, including but
											not limited to those NoFullTime product where you do not have an unpaid
											invoice or account balance.</p>

										<p>Charges are exclusive of all taxes, including VAT. You are responsible for
											all taxes as applicable and appropriate. You are responsible for paying
											(y)&nbsp;all taxes and government charges, and (z) reasonable expenses and
											attorney fees NoFullTime incurs collecting late amounts. All withholding tax
											remittances to the government are your sole responsibility and NoFullTime
											shall have no liability whatsoever therefor. &nbsp;</p>
										<p><b>Refunds</b></p>
										<p>Refunds for NoFullTime services that have already been provided (if any) are
											at the absolute discretion of NoFullTime and only in the form of advertising
											credit for NoFullTime Property. If you are removed from NoFullTime, but have
											previously spent on NoFullTime, you are not entitled to a refund of
											previously spent amounts for services already provided. Refunds for unused
											NoFullTime services that have been pre-paid will be refunded on a prorated
											basis and as per product specific Payment Terms only the unused future
											pre-paid subscription billing cycles will be paid, subject to NoFullTime’s
											discretion. All approved refunds for unused NoFullTime services shall first,
											in NoFullTime’s full discretion, be used to pay all outstanding unpaid
											balances and interest for any NoFullTime product or service where one exists
											associated with your account.&nbsp;</p>
										<p>NoFullTime may elect to apply (i)&nbsp;penalties for late payment as per
											contemporaneous US Federal Reserve interest rates plus 10% or the maximum
											interest permitted by law, whichever is lower and (ii) a statutory lump-sum
											indemnity for recovery cost, if provided for under applicable laws, and
											(iii) any reasonable expenses and attorney fees NoFullTime incurs collecting
											such late payments.</p>
										<div id="i4c-dialogs-container">
											&nbsp;
										</div>
									</div>
								</div>

								<div class="container-fluid">
									<div class="legal-header">
										<h2 class="terms--title text--bold">NoFullTime Products Terms of Service</h2>
										<br>
									</div>

									<div class="has-jumplink" id="resume">
										<h3>NoFullTime Resume/CV Search Program Terms</h3>
										<p>These NoFullTime Resume Search Program Terms or NoFullTime CV Search Program
											Terms (collectively, “IRSP Terms”) form a part of, and are incorporated
											into, the NoFullTime Terms of Service (the “Agreement”), and apply to any
											Employer that accesses or uses the NoFullTime Resume Search offering, or
											that otherwise indicates its acceptance of these NoFullTime Resume Search
											Program Terms. <span style="font-weight: 400;">By agreeing to the
											</span><span style="font-weight: 400;">NoFullTime Resume Search Program
												Terms, you also agree to the </span><span style="font-weight: 400;">NoFullTime Terms of Service</span><span style="font-weight: 400;">.</span></p>
										<p>Any capitalized terms that are used but not defined in these IRSP Terms have
											the meaning set forth in the Agreement.</p>
										<h4><strong>1. The Program</strong></h4>
										<p>Use of the NoFullTime Resume Search Program (“Program”) by an individual who
											posts his or her resume on the Site (hereinafter, “Resume Owner”) or
											Employer on or through the Site is subject to all applicable NoFullTime
											best-practice guidelines, policies and other terms and conditions made
											available to you, including through the Site, on the subscription or plan
											purchase page, and on the FAQ and information page(s) for the country you
											are purchasing a subscription or plan for, any or all of which may be
											modified at any time. Purchasing additional subscriptions or plans, or
											modifying subscriptions or plans may reset the monthly billing date for
											subscriptions or plans associated with your account, resulting in pro rata
											charges to account for the new date. If you purchase a new plan in India
											during the duration of your current plan, the new plan will begin after your
											current plan ends.&nbsp; You shall not use any information obtained from the
											Site except for internal use in selecting and contacting Resume Owners,
											through NoFullTime, for purposes of filling your Job Listings. <span style="font-weight: 400;">You shall not use the NoFullTime Resume Search
												Program for </span><span style="font-weight: 400;">&nbsp;any directly or
												indirectly illegal, discriminatory, or fraudulent purpose. You are
												solely </span><span style="font-weight: 400;">responsible</span><span style="font-weight: 400;"> for your use of the Program, including but
												not limited to, how you search for Job Seekers, who you decide to
												contact, and any employment related decisions you make. </span>Contact
											information provided by NoFullTime, including any Relay Service email
											address, is for your individual use only and may not be shared with any
											other person. You are expressly forbidden from using any product or system
											intended to extract the information from a Resume, in order to circumvent
											the Resume contact system. Use of such system will result in your immediate
											termination from the Program. In addition, as a feature of the IRSP,
											NoFullTime may send emails to Job Seekers on your behalf indicating that
											your Job Listing is potentially a match for the Job Seeker’s resume. <span style="font-weight: 400;">In some circumstances, NoFullTime may limit
												the number and/or frequency of times you may contact a Job Seeker
												through the Site. For example, if you contact a Job Seeker, and the Job
												Seeker does not express interest or contact you back, you may not be
												able to contact them again for a period of time. </span></p>
										<p>IMPORTANT NOTICE : YOU EXPRESSLY AGREE THAT: in purchasing or obtaining
											access to the Program, you are paying NoFullTime the amount indicated on the
											Site for the purpose of NoFullTime facilitating your contact with a Resume
											Owner by sending a message to the email address that the relevant Resume
											Owner has provided to NoFullTime, <span style="color: #000000;">or by
												connecting you via phone call to the number provided by the Resume
												Owner</span>. Your use of the Program is subject to all NoFullTime Site
											Rules and policies, including the NoFullTime Privacy Policy and any policies
											pertaining to Relay Services. NoFullTime does not guarantee that the email
											address is still in use, that such message will be received, that such
											message will be read, that such message will be acted upon by any potential
											Resume Owner, or that any Resume Owner’s resume is valid, accurate or
											complete in any respect. <strong>NoFullTime may return different results for
												the same resume search query and has full discretion with respect to the
												resumes or profiles it presents in response to any particular
												search.</strong><strong>&nbsp;</strong>In addition, in accord with the
											Agreement, you expressly agree that NoFullTime does not allow its Resume
											Contact service to be used in a spam like manner, which NoFullTime defines
											as sending requests for job positions to persons who are, as indicated by
											NoFullTime experience and Resume Owner behavior and reaction, unsuited for
											the role. NoFullTime reserves the right to disable NoFullTime Resume Search
											contact service for any user who, in NoFullTime’s sole discretion, violates
											these IRSP Terms, including the foregoing term. We reserve the right to drop
											any message, including without limitation dropping any message with an .ade,
											.adp, .bat, .chm, .cmd, .com, .cpl, .exe, .hta, .ins, .isp, .jar, .jse,
											.lib, .so, .dll, .lnk, .mde, .msc, .msp, .mst, .pif, .scr, .sct, .shb, .sys,
											.vb, .vbe, .vbs, .vxd, .wsc, .wsf, .wsh, or .zip attachment or any other
											attachment containing scripts, macros, or other code, or other messages that
											NoFullTime suspects to be malicious or spam, or for any or no reason.
											<strong>The only acceptable use of the IRSP is for you to contact a Resume
												Owner through NoFullTime regarding a Job Listing or potential
												employment. No other uses of the IRSP are permitted. </strong>Scraping
											the NoFullTime Resume Search database<span style="font-weight: 400;">, which
												may include any Job Seeker Resume,</span> or using the NoFullTime Resume
											Search database for any other purpose except as allowed will result in legal
											action being taken against you. Additionally, if you are a competitor of
											NoFullTime (including but not limited to any job aggregation website or any
											job posting websites) you may not use the NoFullTime Resume Search database
											to contact a Resume Owner for the purpose of sending them a job offer from
											your clients, and any such competitive use of the NoFullTime Resume Search
											database may result in NoFullTime blocking you from the Site, blocking you
											from contacting Resume Owners, and blocking your contact emails to those
											resume owners without notice and you consent to the same. NoFullTime may
											limit the number of devices each account is logged into. Except for plans in
											certain markets, such as India, where you have the option to assign
											additional seats to a plan, each Resume subscription&nbsp;or plan&nbsp;is
											solely for the individual use of the person to whom it is assigned, and may
											not be shared with other users.&nbsp;If you have a plan in India, you agree
											that adding seats to the plan does not add additional contacts to the
											subscription plan; if you add a seat on a day after the subscription plan
											has started, the price you pay for that seat is prorated, however, the
											number of contacts remains unaffected. For plans in India, once the time
											period on your subscription plan expires, so will any remaining contacts; no
											unused contacts will carry over to your new plan.
										</p>
										<p><strong>In the event phone numbers are provided by the Job Seeker in the
												resume, NoFullTime does not guarantee their validity and can not confirm
												whether such numbers are landlines or cell phones. You agree to call Job
												Seekers regarding relevant job opportunities only. <span style="color: #000000;">It is your sole responsibility to comply
													with all TCPA guidelines,&nbsp;as well as other&nbsp;laws against
													automated telephone dialing systems&nbsp;or laws governing phone or
													mobile communications in your applicable
													jurisdiction</span>.</strong></p>
										<p>Information contained in Job Seeker resumes is self-reported by Job Seekers
											and is not verified by NoFullTime. Any filtering, sorting, or ranking tools
											available to you as part of the Resume program rely on this self-reported
											information. The appearance of a given Job Seeker’s resume in search results
											is not a guarantee that the Job Seeker has the attributes or experience you
											have selected.</p>
										<h4><strong>2. Cancellation</strong></h4>
										<p>Once you have requested that NoFullTime contact a Resume Owner, you may not
											revoke such request. Cancellation of your use of the IRSP shall be in
											accordance with any cancellation policies listed on the Site.</p>
										<h4><strong>3. Your Information</strong></h4>
										<p>You represent and warrant that all information you provide to NoFullTime is
											correct and current. You represent to NoFullTime that you are an Employer
											interested in considering the Resume Owner as a potential employee.</p>
										<h4><strong>4. Disclaimer and Limitation of Liability</strong></h4>
										<p>NoFullTime’S PROVISION OF THE PROGRAM AND THE SITE IS PROVIDED ON AN “AS IS”
											AND “AS AVAILABLE” BASIS. WITH RESPECT TO THE PROGRAM AND YOUR USE THEREOF,
											NoFullTime AND ITS AFFILIATES, AND ITS AND THEIR THIRD-PARTY LICENSORS,
											EXPRESSLY DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING WITHOUT
											LIMITATION ANY WARRANTY THAT ANY EMAIL ADDRESS THAT HAS BEEN PROVIDED TO
											NoFullTime IS VALID, THAT ANY EMAIL SENT BY NoFullTime AT YOUR REQUEST WILL
											REACH THE INTENDED RECIPIENT, THAT ANY INTENDED RECIPIENT OF ANY SUCH EMAIL
											WILL READ SUCH EMAIL, OR THAT ANY SUCH INTENDED RECIPIENT WILL ACT UPON SUCH
											EMAIL. NoFullTime AND ITS AFFILIATES, AND ITS AND THEIR THIRD-PARTY
											LICENSORS, EXPRESSLY DISCLAIM ALL OTHER WARRANTIES INCLUDING WITHOUT
											LIMITATION FOR NON-INFRINGEMENT, <span style="font-weight: 400;">TITLE,
												SERVICE QUALITY, </span>MERCHANTABILITY, AND FITNESS FOR ANY PURPOSE.
											YOU USE NoFullTime, THE SITE, AND THE PROGRAM AT YOUR OWN RISK. NoFullTime
											DOES NOT GUARANTEE THAT THE SITE OR PROGRAM WILL ALWAYS BE ERROR FREE, SAFE,
											OR SECURE.</p>
										<p>EXCEPT FOR AMOUNTS PAYABLE PURSUANT TO SECTION 6 HEREUNDER AND FOR ANY BREACH
											BY YOU OF SECTION 1, TO THE FULLEST EXTENT PERMITTED BY LAW: (a) NEITHER
											PARTY WILL BE LIABLE UNDER THESE IRSP TERMS FOR ANY CONSEQUENTIAL, SPECIAL,
											INDIRECT, EXEMPLARY, PUNITIVE, OR OTHER DAMAGES WHETHER IN CONTRACT, TORT OR
											ANY OTHER LEGAL THEORY, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
											AND NOTWITHSTANDING ANY FAILURE OF ESSENTIAL PURPOSE OF ANY LIMITED REMEDY;
											AND (b) EACH PARTY’S AGGREGATE LIABILITY TO THE OTHER UNDER THESE IRSP TERMS
											IS LIMITED TO AMOUNTS PAID OR PAYABLE TO NoFullTime BY YOU FOR THE
											NoFullTime RESUME SEARCH SERVICE GIVING RISE TO THE CLAIM.</p>
										<h4><strong>5. Indemnification</strong></h4>
										<p>You shall indemnify, defend and hold harmless NoFullTime, its agents,
											affiliates, and licensors from any third-party claim or liability (including
											without limitation reasonable legal fees) arising out of <span style="font-weight: 400;">your use of the NoFullTime Resume Search
												Program, including but not limited to, how you conduct the
												search</span><span style="font-weight: 400;">, </span> any contact you
											have with the recipient (or intended recipient), any email you request to be
											sent pursuant to these IRSP Terms, or any phone call or text message you
											make to a recipient.</p>

										<h3>NoFullTime Hiring Events Program Terms</h3>
										<p>These NoFullTime Hiring Events Program Terms (“IHEP Terms”) incorporate
											the&nbsp;, and apply to any Employer who accesses or uses the NoFullTime
											Hiring Events Program, Hiring Center, or related services, or who otherwise
											indicates its acceptance of these NoFullTime Hiring Events Program Terms.
											By agreeing to the IHEP Terms, you also agree to the&nbsp;&nbsp;(the
											“Agreement”).</p>
										<p>Any capitalized terms that are used but not defined in these IHEP Terms have
											the meaning set forth in the Agreement.</p>
										<h4>1. The Program</h4>
										<p>Use of the NoFullTime Hiring Events Program (“Program”) on or through the
											Site is subject to all applicable NoFullTime terms and policies, including
											without limitation the and those instructions provided on the Site.
											NoFullTime policies may be modified at any time. You shall protect your
											passwords and take full responsibility for your own, and third party, use of
											your accounts.</p>
										<p>By using the Program and accepting these IHEP Terms you acknowledge and agree
											that you are asking NoFullTime to do the following: 1) post, on your behalf,
											Job Listings, as applicable, provided by you on the Site, and manage such ad
											campaign, using information such as the number of RSVPs, 2) include an RSVP
											function on the Site for a hiring event (“Event”) corresponding with each of
											your Job Listings, 3) receive from Job Seekers RSVPs to your Event(s), 4)
											send to you and/or other persons you identify information provided by a Job
											Seeker who RSVPs to your Event(s), and 5) communicate (via email or text
											message) information related to your Event(s) to Job Seekers who have RSVPed
											to your Event(s).
											If you request that NoFullTime send you and other persons you identify
											information provided by a Job Seeker who RSVPs to the Event(s), you certify
											and warrant that such person is part of your organization or is otherwise
											authorized to receive such information.</p>
										<p>With regards to any Job Ad posted on NoFullTime via the Program, including
											any Job Listing of your Event posted in NoFullTime’s discretion, you agree
											that such Job Listing shall be subject to the and the &nbsp;and the
											NoFullTime Ads Program terms and NoFullTime Targeted Ads Program terms are
											incorporated herein.</p>
										<p>You further agree that you are solely responsible for everything regarding
											your Event(s), whether participating or hosting, including but not limited
											to, the content of the Job Listing , screening or screener questions, the
											handling and safeguarding of Job Seeker information provided to you and/or
											other persons you identify as authorized to receive information regarding an
											Event or a Job Seeker, the Event location, your attendees at the Event, or
											any literature, signage or other documentation at the event. You are
											responsible for accommodating Job Seeker requests or needs during the
											interview or application process during the Event. You represent and warrant
											that any data you collect from attendees and share with NoFullTime is
											collected in accordance with local privacy rules. Moreover, you grant to
											NoFullTime, its affiliates, and sublicensees the license to use your name,
											user name, and/or trademarks and logos in connection with any User Content
											or NoFullTime marketing materials, or actions by NoFullTime to promote or
											publicize such User Content (e.g. Job Listings) including the use of
											keywords in third-party internet search engine. You agree that NoFullTime
											may promote your Job Listing through any method in NoFullTime’s sole
											discretion, including but not limited to targeted advertising or using
											keywords in third-party internet search engine. You further acknowledge and
											agree that NoFullTime is not responsible for reviewing qualifications,
											verifying identification, or otherwise screening Job Seekers during each
											Event and that you are solely responsible for so doing.</p>
										<h4>2. Cancellation</h4>
										<p>Unless otherwise stated in an Insertion Order or other agreement to advertise
											with NoFullTime, you may independently cancel any Job Listing (and
											corresponding Event) at any time (such cancellation is generally effective
											within 24 hours).
											However, if you cancel an Event, NoFullTime will still bill you in
											accordance with any pricing listed in a separate agreement or otherwise
											agreed upon by you and NoFullTime, for RSVPs, clicks, applies or impressions
											accrued while the Job Ad for that Event was on the Site, and any platform
											fee, if applicable. NoFullTime may reach out to Job Seekers to communicate
											your Event cancellation. NoFullTime may immediately cancel the Program, any
											part thereof, or these IHEPP Terms at any time upon notice. NoFullTime may
											modify the Program or these IHEP Terms at any time without liability, and
											your use of the Program after notice that these IHEP Terms have changed
											indicates acceptance of the updated IHEP Terms. Sections 1, 3, 4, 5 and 6
											will survive any expiration or termination of these IHEP Terms.</p>
										<h4>3. Prohibited Uses</h4>
										<p>You shall not, and shall not authorize or assist any party to, advertise
											anything illegal or engage in any illegal or fraudulent activities or
											business practices in any state or country where your Job Listing is
											displayed. You represent and warrant that (x) all your information and any
											and all information you provide to NoFullTime is correct and current; (y)
											you hold and grant NoFullTime and Partners all rights to copy, distribute,
											and display Job Listings or Job Ads (“Use”); and (z) such Use and websites
											linked from your Jobs Listings or Jobs Ads (including Your Services therein)
											will not violate or encourage violation of any applicable laws. Violation of
											these policies may result in immediate termination of these IHEP Terms or
											your account without notice, and may subject you to legal penalties and
											consequences.&nbsp;<strong>NoFullTime or Partners may reject or remove any
												Job Listing, Job Ad, or content therein, and NoFullTime may disable any
												Employer’s account, for any or no reason without notice.</strong></p>
										<h4>4. Disclaimer and Limitation of Liability</h4>
										<p>NOFULLTIME’S PROVISION OF THE PROGRAM AND THE SITE IS PROVIDED ON AN “AS IS”
											AND “AS AVAILABLE” BASIS. WITH RESPECT TO THE PROGRAM AND YOUR USE THEREOF,
											NOFULLTIME AND ITS AFFILIATES, AND ITS AND THEIR THIRD-PARTY LICENSORS,
											DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION
											FOR NON-INFRINGEMENT, <span style="font-weight: 400;">TITLE, SERVICE
												QUALITY, </span>MERCHANTABILITY, AND FITNESS FOR ANY PURPOSE. YOU USE
											NOFULLTIME, THE SITE, AND THE PROGRAM AT YOUR OWN RISK. NOFULLTIME DOES NOT
											GUARANTEE THAT THE SITE OR PROGRAM WILL ALWAYS BE <span style="font-weight: 400;">UNINTERRUPTED, </span>ERROR FREE, SAFE, OR
											SECURE.&nbsp;NoFullTime and its affiliates, and its and their third-party
											licensors, disclaim all guarantees regarding positioning or the levels or
											timing of: (i) costs per RSVP, click, apply, or impression, (ii) RSVP rates,
											click through rates, apply rates, or impression rates (including any
											estimate of rates provided in an insertion order), (iii) delivery of any
											impressions on any Partner Property or NoFullTime Property or sections of
											such properties, (iv) RSVPs, clicks, applies or impressions, (v) interest in
											your Job Ad, (vi) attendance at your Event(s), and (vii) the quality of
											attendees at your Event(s). AN RSVP TO YOUR EVENT(S) DOES NOT GUARANTEE
											INTEREST IN YOUR JOB AD. EXCEPT FOR AMOUNTS PAYABLE PURSUANT TO SECTION 6
											HEREUNDER, AND FOR ANY BREACH BY YOU OF SECTION 1, TO THE FULLEST EXTENT
											PERMITTED BY LAW: (a) NEITHER PARTY WILL BE LIABLE UNDER THESE IHEP TERMS
											FOR ANY CONSEQUENTIAL, SPECIAL, INDIRECT, EXEMPLARY, PUNITIVE, OR OTHER
											DAMAGES WHETHER IN CONTRACT, TORT OR ANY OTHER LEGAL THEORY, EVEN IF ADVISED
											OF THE POSSIBILITY OF SUCH DAMAGES AND NOTWITHSTANDING ANY FAILURE OF
											ESSENTIAL PURPOSE OF ANY LIMITED REMEDY; AND (b) EACH PARTY’S AGGREGATE
											LIABILITY TO THE OTHER UNDER THESE IHEP TERMS IS LIMITED TO AMOUNTS PAID OR
											PAYABLE TO NoFullTime BY YOU, IF ANY, FOR THE JOB ADS OR JOB LISTINGS GIVING
											RISE TO THE CLAIM.</p>
										<h4>5. Payment</h4>
										<p>You shall be charged in accordance with the pricing listed in a separate
											agreement or insertion order between you and NoFullTime, and based on
											clicks, RSVPs, applies or impressions (distributed within your budget in
											NoFullTime’s sole discretion) and platform fee, if applicable. RSVPs are
											defined as a user completing the online RSVP form agreeing to attend your
											Event featured in any Job Ad. However, an RSVP does not guarantee that a Job
											Seeker will attend such Event.
											If your NoFullTime employer account has a credit card on file for the
											NoFullTime Ads Program or any other NoFullTime service, we will charge that
											same credit card for your NoFullTime Hiring Events RSVPs, if applicable.</p>
										<p>If your billing address is in India, you may only pay all charges in Indian
											Rupees.
											You are responsible for paying (y) all taxes and government charges, and (z)
											reasonable expenses and attorney fees NoFullTime incurs collecting late
											amounts.
											You waive all claims relating to charges unless claimed within 60 days after
											the charge (this does not affect your credit card issuer rights).&nbsp;
											<strong>
												Charges are solely based on NoFullTIme’s click, RSVP, apply, or
												impression measurements.
												NoFullTIme’s determination of number of clicks, RSVPs, applies or
												impressions shall be binding.
											</strong>&nbsp;
											Refunds (if any) are at the absolute discretion of NoFullTime and only in
											the form of advertising credit for NoFullTime Property.
											If you are removed from NoFullTIme, but have previously spent on NoFullTIme,
											you are not entitled to a refund of previously spent amounts.
										</p>
										<p>You acknowledge and agree that any credit card and related billing and
											payment information that you provide to NoFullTime may be shared by
											NoFullTime with companies who work on NoFullTime’s behalf, such as payment
											processors and/or credit agencies, solely for the purposes of checking
											credit, effecting payment to NoFullTime and servicing your account.
											NoFullTime may also provide information in response to valid legal process,
											such as subpoenas, search warrants and court orders, or to establish or
											exercise its legal rights or defend against legal claims. NoFullTime shall
											not be liable for any use or disclosure of such information by such third
											parties.</p>
										<p>All withholding tax remittances to the government are your sole
											responsibility and NoFullTime shall have no liability whatsoever therefore.
											Invoices may be provided to you via electronic mail. To the extent permitted
											by law, if you have an unpaid or outstanding invoice or account balance for
											any NoFullTime product, NoFullTime reserves the right to suspend or
											terminate your use of that NoFullTime product as well as any other
											NoFullTime product, including but not limited to those NoFullTime products
											where you do not have an unpaid invoice or account balance.</p>
										<h4>6. Indemnification</h4>
										<p>You shall indemnify, defend and hold harmless NoFullTIme, its agents,
											affiliates, licensors, and Partners from any third party claim or liability
											(including without limitation reasonable legal fees) arising out of your
											Program use, Job Listing, screening or screener questions, Event, Site or
											Your Services,
											or breach of these IHEP Terms.
										</p>
									</div>
									<div class="has-jumplink" id="hiringevents">

										<div class="has-jumplink" id="hiringplatform">
											<h3>NoFullTIme Hiring Platform Terms</h3>
											<p>These NoFullTime Hiring Platform Terms (“IHP Terms”) incorporate the
												NoFullTime Terms of Service, and apply to any Employer or Job Seeker who
												accesses or uses the NoFullTIme Hiring Platform or related services, or
												who otherwise indicates its acceptance of these NoFullTime Hiring
												Platform Terms. By agreeing to the IHP Terms, you also agree to the (the
												“Agreement”).</p>
											<p>Any capitalized terms that are used but not defined in these IHP Terms
												have the meaning set forth in the Agreement.</p>
											<h4>1. The Program</h4>
											<p>NoFullTIme Hiring Platform is a platform designed to automate and
												streamline your hiring and employment decision-making processes by
												allowing users access to various products such as NoFullTime Interview
												or related services (“Program”). You understand that use of NoFullTime
												Hiring Platform and related products is at your sole discretion and such
												tools are applied to your hiring process and job openings in the method
												and manner that you decide.
												YOU UNDERSTAND AND AGREE THAT YOU ARE RESPONSIBLE FOR COMPLYING WITH
												APPLICABLE LAW REGARDING YOUR EMPLOYMENT AND HIRING PRACTICES, INCLUDING
												TITLE VII, AND THAT YOU MUST INDEMNIFY NOFULLTIME AGAINST ANY AND ALL
												CLAIMS ARISING FROM YOUR USE OF NOFULLTIME HIRING PLATFORM OR SIMILAR
												PRODUCTS.
												NOFULLTIME DISCLAIMS ALL LIABILITY AND MAKES NO WARRANTY THAT YOUR USE
												OF THE SERVICES COMPLIES WITH TITLE VII OR ANY SIMILAR LAW. NoFullTime
												makes no representation that NoFullTime or its affiliates are an
												employment agency by offering NoFullTime Hiring Platform and related
												tools. You understand that NoFullTime is not procuring employees for you
												or opportunities for Job Seekers.</p>
											<p>By using the Program and accepting these IHP Terms you acknowledge and
												agree that you are asking NoFullTime to do the following: 1) post, on
												your behalf, Job Listings, as applicable, provided by you on the Site,
												and manage such ad campaign, using information such as the number of
												RSVPs, 2) include an RSVP function on the Site for a hiring event,
												interview session or interview post (“Event”) corresponding with each of
												your Job Ads or Listings, 3) receive from Job Seekers RSVPs to your
												Event(s), 4) add any screening tools you choose, including, but not
												limited to screening questions, evaluation methods, and Assessments, 5)
												send to you and/or other persons you identify information provided by a
												Job Seeker who RSVPs to your Event(s), and 6) communicate (via email or
												text message) information related to your Event(s) to Job Seekers who
												have RSVPed to your Event(s). If you request that NoFullTime send you
												and other persons you identify information provided by a Job Seeker who
												RSVPs to the Event(s), you certify and warrant that such person is part
												of your organization or is otherwise authorized to receive such
												information.</p>
											<p>You further agree that you are solely responsible for everything
												regarding your Event(s), whether participating or hosting, including but
												not limited to, the content of the Job Listing or Job Ad, screening or
												screener questions, Assessments, the handling and safeguarding of Job
												Seeker information provided to you and/or other persons you identify as
												authorized to receive information regarding an Event or a Job Seeker,
												the Event location, your attendees at the Event, or any literature,
												signage or other documentation at the event. You are responsible for
												accommodating Job Seeker requests or needs during the interview or
												application process during the Event. You represent and warrant that any
												data you collect from attendees and share with NoFullTime is collected
												in accordance with local privacy rules. Moreover, you grant to
												NoFullTime, its affiliates, and sublicensees the license to use your
												name, user name, and/or trademarks and logos in connection with any User
												Content or NoFullTime marketing materials, or actions by NoFullTime to
												promote or publicize such User Content (e.g. Job Listings) including the
												use of keywords in third-party internet search engine. You agree that
												NoFullTime may promote your Job Listing or Job Ad through any method in
												NoFullTime’s sole discretion, including but not limited to targeted
												advertising, on third party websites, including, but not limited to
												apps, or using keywords in third-party internet search engines. You
												further acknowledge and agree that NoFullTime is not responsible for
												reviewing qualifications, verifying identification, or otherwise
												screening Job Seekers during each Event and that you are solely
												responsible for so doing.</p>
											<p>When Job Seekers apply or RSVP to your job listing, NoFullTime may
												request that they provide certain demographic information, such as race
												and ethnicity, gender, age, LGBTQ+ community membership, and disability
												status (“Demographic Information”). By using the Program, you agree that
												NoFullTime may collect Demographic Information from Job Seekers applying
												to your job listing, and that NoFullTime may use it to evaluate and
												improve our products. You further agree that you as an Employer have no
												ability, right, or entitlement to view or access any Job Seeker’s
												Demographic Information without their permission. You agree you are
												solely responsible for complying with applicable nondiscrimination laws.
												NoFullTime disclaims any warranty regarding the demographic composition
												of Job Seekers applying to any particular job.</p>
											<h4>2. Cancellation</h4>
											<p>Unless otherwise stated in an Insertion Order or other agreement to
												advertise with NoFullTime, you may independently cancel any Job Listing
												at any time (such cancellation is generally effective within 24 hours).
												However, if you cancel an Event, NoFullTime will still bill you in
												accordance with any pricing listed in a separate agreement or otherwise
												agreed upon by you and NoFullTime, for RSVPs, clicks, applies or
												impressions accrued while the Job Ad for that Event was on the Site, and
												any platform fee, if applicable. NoFullTime may reach out to Job Seekers
												to communicate your Event cancellation. NoFullTime may immediately
												cancel the Program, any part thereof, or these IHP Terms at any time
												upon notice. NoFullTime may modify the Program or these IHP Terms at any
												time without liability, and your use of the Program after notice that
												these IHP Terms have changed indicates acceptance of the updated IHP
												Terms. Sections 1, 3, 4, 5 and 6 will survive any expiration or
												termination of these IHP Terms.</p>
											<p><strong>3. Prohibited Uses</strong></p>
											<p>You shall not, and shall not authorize or assist any party to, advertise
												anything illegal or engage in any illegal or fraudulent activities or
												business practices in any
												state or country where your Job Listing is displayed.
												You represent and warrant that all your information and any and all
												information you provide to NoFullTime is correct and current; you hold
												and grant NoFullTime and Partners all rights to
												copy, distribute, and display Job Listings (“Use”); and (z) such Use and
												websites linked from your Jobs Listings (including Your Services
												therein) will not violate or encourage violation
												of any applicable laws.
												Violation of these policies may result in immediate termination of these
												IHPTerms or your account without notice, and may subject you to legal
												penalties and consequences.
												NoFullTime or Partners may reject or remove any Job Listing, or content
												therein, and NoFullTime may disable any Employer’s account, for any or
												no reason without notice.</p>
											<p><strong>4. Disclaimer and Limitation of Liability</strong></p>
											<p>NoFullTime’S PROVISION OF THE PROGRAM AND THE SITE IS PROVIDED ON AN “AS
												IS” AND “AS AVAILABLE” BASIS. WITH RESPECT TO THE PROGRAM AND YOUR USE
												THEREOF, NOFULLTIME AND ITS AFFILIATES, AND ITS AND THEIR THIRD-PARTY
												LICENSORS, DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING
												WITHOUT LIMITATION FOR NON-INFRINGEMENT, <span style="font-weight: 400;">TITLE, SERVICE QUALITY,&nbsp;
												</span>MERCHANTABILITY, AND FITNESS FOR ANY PURPOSE.
												YOU USE NOFULLTIME, THE SITE, AND THE PROGRAM AT YOUR OWN RISK.
												NOFULLTIME DOES NOT GUARANTEE THAT THE SITE OR PROGRAM WILL ALWAYS BE
												<span style="font-weight: 400;">UNINTERRUPTED, </span>ERROR FREE, SAFE,
												OR SECURE.&nbsp; NoFullTime and its affiliates, and its and their
												third-party licensors, disclaim all guarantees regarding positioning or
												the levels or timing of: costs per RSVP, click, apply, or impression,
												(ii) RSVP rates, click through rates, apply rates, or impression rates
												(including any estimate of rates provided in an insertion order), (iii)
												delivery of any impressions on any Partner Property or NoFullTime
												Property or sections of such properties, (iv) RSVPs, clicks, applies or
												impressions, (v) interest in your Job Ad, (vi) attendance at your
												Event(s), and (vii) the quality of attendees at your Event(s). AN RSVP
												TO YOUR EVENT(S) DOES NOT GUARANTEE INTEREST IN YOUR JOB AD. EXCEPT FOR
												AMOUNTS PAYABLE PURSUANT TO SECTION 6 HEREUNDER, AND FOR ANY BREACH BY
												YOU OF SECTION 1, TO THE FULLEST EXTENT PERMITTED BY LAW: (a) NEITHER
												PARTY WILL BE LIABLE UNDER THESE IHPTERMS FOR ANY CONSEQUENTIAL,
												SPECIAL, INDIRECT, EXEMPLARY, PUNITIVE, OR OTHER DAMAGES WHETHER IN
												CONTRACT, TORT OR ANY OTHER LEGAL THEORY, EVEN IF ADVISED OF THE
												POSSIBILITY OF SUCH DAMAGES AND NOTWITHSTANDING ANY FAILURE OF ESSENTIAL
												PURPOSE OF ANY LIMITED REMEDY; AND (b) EACH PARTY’S AGGREGATE LIABILITY
												TO THE OTHER UNDER THESE IHPTERMS IS LIMITED TO AMOUNTS PAID OR PAYABLE
												TO NOFULLTIME BY YOU, IF ANY, FOR THE JOB ADS OR JOB LISTINGS GIVING
												RISE TO THE CLAIM.
											</p>
											<h4>5. Payment</h4>
											<p>You shall be charged in accordance with the pricing listed in a separate
												agreement or insertion order between you and NoFullTime, and based on
												clicks, RSVPs, applies or impressions (distributed within your budget in
												NoFullTime’s sole discretion) and platform fee, if applicable.
												NoFullTime may offer a subscription payment option wherein you will be
												charged as indicated in an insertion order. RSVPs are defined as a user
												completing the online RSVP form agreeing to attend your Event featured
												in any Job Ad. However, an RSVP does not guarantee that a Job Seeker
												will attend such Event. If your NoFullTime employer account has a credit
												card on file for the NoFullTime Ads Program or any other NoFullTime
												service, we will charge that same credit card for your NoFullTime Hiring
												Platform RSVPs, if applicable.</p>
											<p>If your billing address is in India, you may only pay all charges in
												Indian Rupees.
												You are responsible for all taxes as applicable and appropriate.
												You are responsible for paying all taxes and government charges, and (z)
												reasonable expenses and attorney fees NoFullTime incurs collecting late
												amounts.
												You waive all claims relating to charges unless claimed within 60 days
												after the charge (this does not affect your credit card issuer rights).
												Charges are solely based on NoFullTime’s click, RSVP, apply, or
												impression measurements.
												NoFullTime’s determination of number of clicks, RSVPs, applies or
												impressions shall be binding.
												Refunds (if any) are at the absolute discretion of NoFullTime and only
												in the form of advertising credit for NoFullTime Property.
												If you are removed from NoFullTime, but have previously spent on
												NoFullTime, you are not entitled to a refund of previously spent
												amounts.
											</p>
											<p>You acknowledge and agree that any credit card and related billing and
												payment information that you provide to NoFullTime may be shared by
												NoFullTime with companies who work on NoFullTime’s behalf, such as
												payment processors and/or credit agencies, solely for the purposes of
												checking credit, effecting payment to NoFullTime and servicing your
												account. NoFullTime may also provide information in response to valid
												legal process, such as subpoenas, search warrants and court orders, or
												to establish or exercise its legal rights or defend against legal
												claims. NoFullTime shall not be liable for any use or disclosure of such
												information by such third parties.</p>
											<p>All withholding tax remittances to the government are your sole
												responsibility and NoFullTime shall have no liability whatsoever
												therefore. Invoices may be provided to you via electronic mail. To the
												extent permitted by law, if you have an unpaid or outstanding invoice or
												account balance for any NoFullTime product, NoFullTime reserves the
												right to suspend or terminate your use of that NoFullTime product as
												well as any other NoFullTime product, including but not limited to those
												NoFullTime products where you do not have an unpaid invoice or account
												balance.</p>
											<h4>6. Indemnification</h4>
											<p>You shall indemnify, defend and hold harmless NoFullTime, its agents,
												affiliates, licensors, and Partners from any third party claim or
												liability (including without limitation reasonable legal fees) arising
												out of your Program use, Job Listing, Job Ad, screening or screener
												questions, Event, Site or Your Services, or breach of these IHP Terms.
											</p>
											<p>&nbsp;</p>
										</div>
										<div id="i4c-dialogs-container">
											&nbsp;
										</div>
									</div>


							</main>
						</div>
						<!-- Close .legal-page -->
					</div>
					<!-- #main -->
				</div>
				<!-- #page -->
			</div>
		</div>
	</section>
	<!-- End testimonial Area -->


	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-12">
					<div class="single-footer-widget">
						<h6>Short Links</h6>
						<ul class="footer-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="about-us.php">About Us</a></li>
							<li><a href="category.php">Category</a></li>
							<li><a href="recruiters.php">Recruiters</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6  col-md-12">
					<div class="single-footer-widget newsletter">
						<h6>Other Links</h6>
						<ul class="footer-nav">
							<li><a href="terms.php">Terms and Conditions</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
						<br>

					</div>
				</div>
				<div class="col-lg-3  col-md-12">
					<div class="single-footer-widget mail-chimp">
						<h6>Get In Touch</h6>
						<a title="Address "><i class="fa fa-map-marker "></i> No.32, Vinayagar Kovil Street,
							Karungalpalayam,
							Erode - 638003, Tamil Nadu, India</a>
						<br>
						<a href="mailto:support@nofulltime.com " title="Email "><i class="fa fa-envelope "></i>
							support@nofulltime.com</a>
						<br>
						<a href="tel:+919790030919 " title="Contact "><i class="fa fa-phone "></i> +91-97900-30919</a>
					</div>
				</div>
			</div>

			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">

					Copyright &copy;
					<script>
						document.write(new Date().getFullYear());
					</script> NoFullTime |All rights reserved
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="https://www.facebook.com/abcinfomediapvtltd/"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/abc_infomedia/"><i class="fa fa-instagram"></i></a>
					<a href="https://twitter.com/abc_infomedia/"><i class="fa fa-twitter"></i></a>
					<a href="https://in.linkedin.com/company/abc-infomedia-private-limited"><i class="fa fa-linkedin"></i></a>
					<a href="https://in.pinterest.com/abcinfomediapvtltd/"><i class="fa fa-pinterest"></i></a>
					<a href="https://www.youtube.com/channel/UCa5hWmytEVKaeyqI_jpgAlw"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>