<?php 
  
  include("functions/userfunctions.php");
  include("authenticate.php");
  $page_title="Quiz page";
  include("includes/header.php");
  
 ?>
 <div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Introduction to Computers Quiz</h1>
    <div id="quiz">
        <div class="question" id="question1">
            <p>1. What is the main function of the CPU?</p>
            <input type="radio" id="q1a1" name="q1" value="a">
            <label for="q1a1">A. Store data</label><br>
            <input type="radio" id="q1a2" name="q1" value="b">
            <label for="q1a2">B. Process data</label><br>
            <input type="radio" id="q1a3" name="q1" value="c">
            <label for="q1a3">C. Display information</label><br>
        </div>

        <div class="question" id="question2">
            <p>2. Which component is considered the "brain" of the computer?</p>
            <input type="radio" id="q2a1" name="q2" value="a">
            <label for="q2a1">A. RAM</label><br>
            <input type="radio" id="q2a2" name="q2" value="b">
            <label for="q2a2">B. Hard Drive</label><br>
            <input type="radio" id="q2a3" name="q2" value="c">
            <label for="q2a3">C. CPU</label><br>
        </div>
        <div class="question" id="question3">
            <p>3. What does RAM stand for?</p>
            <input type="radio" id="q3a1" name="q3" value="a">
            <label for="q3a1">A. Random Access Memory</label><br>
            <input type="radio" id="q3a2" name="q3" value="b">
            <label for="q3a2">B. Read Access Memory</label><br>
            <input type="radio" id="q3a3" name="q3" value="c">
            <label for="q3a3">C. Remote Access Memory</label><br>
        </div>

        <div class="question" id="question4">
            <p>4. What is the purpose of an operating system?</p>
            <input type="radio" id="q4a1" name="q4" value="a">
            <label for="q4a1">A. To manage hardware and software resources</label><br>
            <input type="radio" id="q4a2" name="q4" value="b">
            <label for="q4a2">B. To perform calculations</label><br>
            <input type="radio" id="q4a3" name="q4" value="c">
            <label for="q4a3">C. To store data permanently</label><br>
        </div>

        <div class="question" id="question5">
            <p>5. Which of the following is NOT an input device?</p>
            <input type="radio" id="q5a1" name="q5" value="a">
            <label for="q5a1">A. Keyboard</label><br>
            <input type="radio" id="q5a2" name="q5" value="b">
            <label for="q5a2">B. Mouse</label><br>
            <input type="radio" id="q5a3" name="q5" value="c">
            <label for="q5a3">C. Monitor</label><br>
        </div>
        
        <div class="mb-3 py-2 text-center"> 
        <button class="btn btn-primary btn-sn" onclick="checkAnswers()">Submit</button>
        </div>
    </div>
    <div id="result"></div>

    <script>
       function checkAnswers() {
    const correctAnswers = {
        q1: 'b', // CPU's main function is to process data
        q2: 'c', // CPU is considered the "brain" of the computer
        q3: 'a', // RAM stands for Random Access Memory
        q4: 'a', // The purpose of an operating system is to manage hardware and software resources
        q5: 'c'  // A Monitor is not an input device
    };

    let score = 0;

    // Check each question's selected answer
    for (let question in correctAnswers) {
        const selectedOption = document.querySelector(input[name="${question}"]:checked);
        if (selectedOption && selectedOption.value === correctAnswers[question]) {
            score++;
        }
    }

    // Display the result
    const result = document.getElementById('result');
    result.innerHTML = <h2>You scored ${score} out of ${Object.keys(correctAnswers).length}</h2>;
}
    </script>
                
            </div>
        </div>
    </div>
 </div>
    
<?php  include("includes/footer.php");