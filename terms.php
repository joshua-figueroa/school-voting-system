<?php
    session_start();
    $name = $_SESSION['name'];
    require 'includes/database.php';
    $sql = "SELECT firstName, voted FROM users WHERE firstName=? AND voted=0";
    $stmt = $conn -> stmt_init();
    if($stmt -> prepare($sql)) {
        $stmt -> bind_param("s", $name);
        $stmt -> execute();
        $stmt -> store_result();
        $resultCheck = $stmt -> num_rows();
            if($resultCheck > 0) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="css/terms_privacy.css">
    <title>Terms and Conditions</title>
</head>
<body>
    <div class="container-fluid py-4" id="top">
        <div class="row mx-3 bg-white px-2 shadow" id="body">
            <h1 class="text-center my-3">Terms and Conditions for Voting</h1>

            <h2>Introduction</h2> 
            <p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Automated 2020 Voting System accessible at voting-system.unaux.com.</p>
            <p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</p>
            <p>Minors or people below 18 years old are not allowed to use this Website.</p>

            <h2>Intellectual Property Rights</h2>
            <p>Other than the content you own, under these Terms, Voting and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>
            <p>You are granted limited license only for purposes of viewing the material contained on this Website.</p>

            <h2>Restrictions</h2>
            <p>You are specifically restricted from all of the following:</p>
            <ul class="ml-4 mr-1">
                <li>publishing any Website material in any other media;</li>
                <li>selling, sublicensing and/or otherwise commercializing any Website material;</li>
                <li>publicly performing and/or showing any Website material;</li>
                <li>using this Website in any way that is or may be damaging to this Website;</li>
                <li>using this Website in any way that impacts user access to this Website;</li>
                <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>
                <li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>
                <li>using this Website to engage in any advertising or marketing.</li>
            </ul>
            <p>Certain areas of this Website are restricted from being access by you and Voting may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p>

            <h2>Your Content</h2>
            <p>In these Website Standard Terms and Conditions, "Your Content" shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Voting a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</p>
            <p>Your Content must be your own and must not be invading any third-party’s rights. Voting reserves the right to remove any of Your Content from this Website at any time without notice.</p>

            <h2>Your Privacy</h2>
            <p>Please read Privacy Policy on the next page.</p>

            <h2>Indemnification</h2>
            <p>You hereby indemnify to the fullest extent Voting from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>

            <h2>Severability</h2>
            <p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>

            <h2>Variation of Terms</h2>
            <p>Voting is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>

            <h2>Assignment</h2>
            <p>The Voting is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>

            <h2>Entire Agreement</h2>
            <p>These Terms constitute the entire agreement between Voting and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>

            <h2>Governing Law & Jurisdiction</h2>
            <p>These Terms will be governed by and interpreted in accordance with the laws of the State of ph, and you submit to the non-exclusive jurisdiction of the state and federal courts located in ph for the resolution of any disputes.</p>

            <form class="form-signin my-3 mx-auto text-center" action="privacy.php" method="POST">
                <button class="btn btn-purple px-4 mx-auto" type="submit" name="next-btn">Next</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
        }
        else {
            header("Location: vote.php");
            exit();
        }
    }
    else {
        header("Location: index.php");
        exit();
    }
?>