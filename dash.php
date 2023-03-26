<?php
include('inc/header4.php');
?>
<link rel="stylesheet" href="css/style.css" />
<body>
    <div class="container-fluid bg-black p bg-opacity-75 text-dark m-0 min-vh-100">
        <nav class="navbar navbar-expand-lg mb-5">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Workout & Eat</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active text-white" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container bg-light bg-opacity-25 p-5  text-dark align-items-center row justify-content-center col-11 col-sm-8 m-auto my-5 rounded-4">
            <form method="post" action="">
                <div class="form-group">
                    <h2 class="text-center text-white">Clear your doubts about Workouts !</h2>
                    <textarea class="form-control my-3" placeholder="Ask me about food and workout..." id="question" name="question" rows="5"></textarea>
                </div>
                <button type="submit" class="btn text-white btn-success my-3">
                    Know your Doubt
                </button>
            </form>

            <?php
            if (!empty($_POST["question"]) && $_POST['question']) {
                include('class/OpenAi.php');
                $openai = new OpenAi();
                $openai->question = $_POST['question'];
            ?>
                <div class="my-3">
                    <span class="text-dark font-weight-bold">Question : </span>
                    <span class="font-weight-normal" style="margin-left: 10px"><?php echo ucfirst($_POST['question']); ?></span>
                </div>
                <div class="">
                    <span class="text-dark font-weight-bold">Answer : </span>
                    <br />
                    <h6 class="" style="margin-left: 10px">
                        <?php
                        $response = $openai->getAnswer();
                        if (strpos($response, 'food') !== false || strpos($response, 'eggs') !== false || strpos($response, 'Food') !== false
                            || strpos($response, 'beef') !== false || strpos($response, 'nutrition') !== false || strpos($response, 'chicken') !== false
                            || strpos($response, 'healthy') !== false || strpos($response, 'nutrition') !== false || strpos($response, 'diet') !== false
                            //   gym
                            || strpos($response, 'gym') !== false || strpos($response, 'workout') !== false || strpos($response, 'exercise') !== false
                            || strpos($response, 'bodybuilding') !== false || strpos($response, 'false gym workout') !== false
                            || strpos($response, 'workouts') !== false || strpos($response, 'fitness') !== false) {                       
 	            echo $openai->getAnswer(); 
                 return $response;
            } else {
   
 	                echo 'I ONLY PROVIDE TRAINING AND DIETING INFORMATION'; 
                    return $openai->getAnswer();
                    }
            
                } 
            
                else{
                    
                }
 ?>
                </h6>
            </div>
        </div>
    </div>

    <?php include('inc/footer4.php'); ?>
</body>
