<?php 
	session_start(); 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css" rel="stylesheet"/>

    <title>Company Manager Home Page</title>
  </head>

  <body>

  <div class="text-center page-header">
		<br>
		<h2>Welcome to Company Manager Home Page</h2>
        <hr>
	</div>

    <div class="text-center page-header w-50 " style="margin-left: 25.5%;">
        <h3>Pick one of the options below</h3>
        <hr>
        <br>
    </div>


        <!-- Accordion with options and forms in it -->
        
        <div class="accordion p-3" id="accordion">

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
        <button
            class="accordion-button"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#collapseOne"
            aria-expanded="true"
            aria-controls="collapseOne"
        >
            Add a Simple User
        </button>
        </h2>
        <div
        id="collapseOne"
        class="accordion-collapse collapse"
        aria-labelledby="headingOne"
        data-mdb-parent="#accordionExample"
        >
        <div class="accordion-body">
            

            <!-- The first form for adding company -->
            <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 

            <div class = "text-center"><h4>Enter Simple User Details</h4></div>
            <hr>

            <!-- FName input --> 
            <div class="form-outline mb-4">
                <input type="text" name="FName" id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Username</label>
            </div>

            <!-- ID input --> 
            <div class="form-outline mb-4">
                <input type="number" name="ID" id="form1Example2" class="form-control" />
                <label class="form-label" for="form1Example2">ID</label>
            </div>

            <!-- BirthDate input --> 
            <div class="form-outline mb-4">
                <input type="date" name="BirthDate" id="form1Example3" class="form-control" />
                <label class="form-label" for="form1Example3">Birth Date</label>
            </div>

            <!-- Sex input --> 
            <div class="form-outline mb-4">
                <input type="number" name="Sex" id="form1Example4" min="0" max="1" class="form-control" />
                <label class="form-label" for="form1Example4">Sex (0 for Male | 1 for Female)</label>
            </div>

            <!-- Username input --> 
            <div class="form-outline mb-4">
                <input type="text" name="UserName" id="form1Example5" class="form-control" />
                <label class="form-label" for="form1Example5">Username</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="Pass" id="form1Example6" class="form-control" />
                <label class="form-label" for="form1Example6">Password</label>
            </div>

            <!-- SuperID input -->
            <div class="form-outline mb-4">
                <input type="number" name="SuperID" id="form1Example7" class="form-control" />
                <label class="form-label" for="form1Example7">Supervisor ID</label>
            </div>

            <!-- Submit button -->
            <button type="submit" name="CreateSimpleUser" class="btn btn-primary btn-block">Submit</button>
            <br>
            </form>


        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
        <button
            class="accordion-button collapsed"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#collapseTwo"
            aria-expanded="false"
            aria-controls="collapseTwo"
        >
            Remove a Simple User
        </button>
        </h2>
        <div
        id="collapseTwo"
        class="accordion-collapse collapse"
        aria-labelledby="headingTwo"
        data-mdb-parent="#accordionExample"
        >
        <div class="accordion-body">
            
                <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 
                    <div class = "text-center"><h4>Enter Simple User to Remove</h4></div>
                    <hr>

                <!-- ID input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="ID" id="form1Example8" class="form-control" />
                    <label class="form-label" for="form1Example8">ID</label>
                </div>

                <!-- Submit button -->
                <button type="submit" name="RemoveSimpleUser" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>

        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
        <button
            class="accordion-button collapsed"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#collapseThree"
            aria-expanded="false"
            aria-controls="collapseThree"
        >
            View Details of a Simple User
        </button>
        </h2>
        <div
        id="collapseThree"
        class="accordion-collapse collapse"
        aria-labelledby="headingThree"
        data-mdb-parent="#accordionExample"
        >
        <div class="accordion-body">
            
                <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 
                    <div class = "text-center"><h4>Enter Simple User to View</h4></div>
                    <hr>

                <!-- ID input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="ID" id="form1Example9" class="form-control" />
                    <label class="form-label" for="form1Example9">ID</label>
                </div>

                <!-- Submit button -->
                <button type="submit" name="ViewSimpleUser" class="btn btn-primary btn-block">Search</button>
                <br>
                </form>

        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
        <button
            class="accordion-button collapsed"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#collapseFour"
            aria-expanded="false"
            aria-controls="collapseFour"
        >
            Modify Details of a Simple User
        </button>
        </h2>
        <div
        id="collapseFour"
        class="accordion-collapse collapse"
        aria-labelledby="headingFour"
        data-mdb-parent="#accordionExample"
        >
        <div class="accordion-body">
            
        <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 
                    <div class = "text-center"><h4>Enter Simple User ID</h4></div>
                    <hr>

                <!-- ID input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="ID" id="form1Example10" class="form-control" />
                    <label class="form-label" for="form1Example10">ID</label>
                </div>

                <div class = "text-center"><h4>Enter the new Simple User Details</h4></div>
                    <hr>

                    <!-- FName input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="FName" id="form1Example11" class="form-control" />
                    <label class="form-label" for="form1Example11">Username</label>
                </div>                     

                <!-- BirthDate input --> 
                <div class="form-outline mb-4">
                    <input type="date" name="BirthDate" id="form1Example12" class="form-control" />
                    <label class="form-label" for="form1Example12">Birth Date</label>
                </div>

                <!-- Sex input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="Sex" id="form1Example13" min="0" max="1" class="form-control" />
                    <label class="form-label" for="form1Example13">Sex (0 for Male | 1 for Female)</label>
                </div>

                <!-- Username input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="UserName" id="form1Example14" class="form-control" />
                    <label class="form-label" for="form1Example14">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="Pass" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example15">Password</label>
                </div>

                <!-- SuperID input -->                       
                <div class="form-outline mb-4">
                    <input type="number" name="SuperID" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example15">Supervisor ID</label>
                </div>

                <!-- Submit button -->
                <button type="submit" name="ModifySimpleUser" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>

        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
        <button
            class="accordion-button collapsed"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#collapseFive"
            aria-expanded="false"
            aria-controls="collapseFive"
        >
            Create a Questionnaire
        </button>
        </h2>
        <div
        id="collapseFive"
        class="accordion-collapse collapse"
        aria-labelledby="headingFive"
        data-mdb-parent="#accordionExample"
        >
        <div class="accordion-body">
            
                <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 
                    <div class = "text-center"><h4>Enter Questionnaire Details</h4></div>
                    <hr>

                <!-- Title input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="Title" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Title</label>
                </div> 

                <!-- Link needs to be set to null until we assign a url -->

                <!-- QairState needs to be set to 0 --> 
                
                <!-- QairVersion needs to be set to 0 -->

                <!-- Parent Title needs to be set to Title --> 
                <!-- What happens with clone? -->

                <!-- QairNum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="QairNum" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Questionnaire Number ID</label>
                </div>                                 

                <!-- Submit button -->
                <button type="submit" name="CreateQuestionnaire" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>


        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
        <button
            class="accordion-button collapsed"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#collapseSix"
            aria-expanded="false"
            aria-controls="collapseSix"
        >
            Modify an existing Questionnaire
        </button>
        </h2>
        <div
        id="collapseSix"
        class="accordion-collapse collapse"
        aria-labelledby="headingSix"
        data-mdb-parent="#accordionExample"
        >
        <div class="accordion-body">
            
        <!-- Add question -->
                <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 
                    <div class = "text-center"><h4>Enter Questionnaire ID</h4></div>
                    <hr>
                    
                <!-- QairNum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="QairNum" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Questionnaire Number ID</label>
                </div>        

                <div class = "text-center"><h4>Add a Question</h4></div>
                    <hr>

                <!-- Qnum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="Qnum" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Question Number</label>
                </div>                                               

                <!-- Submit button -->
                <button type="submit" name="AddQuestionIntoQuestionnaire" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>

                    <br>
                    <br>

                    <!-- Remove a question -->
                    <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 
                    <div class = "text-center"><h4>Enter Questionnaire ID</h4></div>
                    <hr>
                    
                <!-- QairNum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="QairNum" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Questionnaire Number ID</label>
                </div>        

                <div class = "text-center"><h4>Remove a Question</h4></div>
                    <hr>

                <!-- Qnum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="Qnum" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Question Number</label>
                </div>                                               

                <!-- Submit button -->
                <button type="submit" name="RemoveQuestionFromQuestionnaire" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>

                    <br>
                    <br>

                    <!-- Swap a question -->
                    <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 
                    <div class = "text-center"><h4>Enter Questionnaire ID</h4></div>
                    <hr>
                    
                <!-- QairNum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="QairNum" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Questionnaire Number ID</label>
                </div>        

                <div class = "text-center"><h4>Swap a Question</h4></div>
                    <hr>

                <!-- Qnum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="Qnum" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Old Question Question Number</label>
                </div>
                
                <!-- Qnum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="Qnum2" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">New Question Question Number</label>
                </div> 

                <!-- Submit button -->
                <button type="submit" name="ReplaceQuestionFromQuestionnaire" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>

        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSeven">
        <button
            class="accordion-button collapsed"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#collapseSeven"
            aria-expanded="false"
            aria-controls="collapseSeven"
        >
        Create a Question
        </button>
        </h2>
        <div
        id="collapseSeven"
        class="accordion-collapse collapse"
        aria-labelledby="headingSeven"
        data-mdb-parent="#accordionExample"
        >
        <div class="accordion-body">
            
                <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 
                    <div class = "text-center"><h4>Enter Free Text Question Details</h4></div>
                    <hr>

                <!-- Descr input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="Descr" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Description</label>
                </div> 

                <!-- Qtext input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="Qtext" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Question text</label>
                </div> 

                <!-- QNum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="QNum" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Question Number ID</label>
                </div>                                 

                <!-- User ID needs to be set manually -->

                <!-- Submit button -->
                <button type="submit" name="CreateFreeTextQuestion" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>

                <br>
                <br>

                <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 
                    <div class = "text-center"><h4>Enter Numerical Choice Question Details</h4></div>
                    <hr>

                <!-- Descr input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="Descr" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Description</label>
                </div> 

                <!-- Qtext input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="Qtext" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Question text</label>
                </div> 

                <!-- QNum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="QNum" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Question Number ID</label>
                </div>                                 

                <!-- User ID needs to be set manually -->

                <!-- UpperBounds input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="UpperBounds" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Set Upper Bounds | 0 if none</label>
                </div>  

                <!-- LowerBounds input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="LowerBounds" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Set Lower Bounds | 0 if none</label>
                </div>  

                <!-- WithBounds needs to be set manually -->

                <!-- NCID needs to be set manually -->

                <!-- Submit button -->
                <button type="submit" name="CreateNumericalQuestion" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>

                <br>
                <br>

                <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 
                    <div class = "text-center"><h4>Enter Multiple Choice Question Details</h4></div>
                    <hr>

                <!-- Descr input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="Descr" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Description</label>
                </div> 

                <!-- Qtext input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="Qtext" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Question text</label>
                </div> 

                <!-- QNum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="QNum" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Question Number ID</label>
                </div>                                 

                <!-- User ID needs to be set manually -->

                <!-- Awnsers input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="Awnser" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Enter the awnsers | separate with ,</label>
                </div>  

                <!-- Single Choice, MCID, AwnserID need to be set manually -->

                <!-- Submit button -->
                <button type="submit" name="CreateMultipleQuestion" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>

        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingEight">
        <button
            class="accordion-button collapsed"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#collapseEight"
            aria-expanded="false"
            aria-controls="collapseEight"
        >
        Modify an existing Question
        </button>
        </h2>
        <div
        id="collapseEight"
        class="accordion-collapse collapse"
        aria-labelledby="headingEight"
        data-mdb-parent="#accordionExample"
        >
        <div class="accordion-body">
            
                <form method="post" class="w-25 p-3" style="margin-left: 37.5%;"> 

                <!-- For modify we need to check which type of question it is and act accordingly and that it matches the question id -->

                <div class = "text-center"><h4>Enter Question Number ID to Delete</h4></div>
                    <hr>

                    <!-- QNum input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="QNum" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Question Number ID</label>
                </div>
                
                <!-- Submit button -->
                <button type="submit" name="DeleteQuestion" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>

                <form method="post" class="w-25 p-3" style="margin-left: 37.5%;">
                <div class = "text-center"><h4>Enter Question Details to Modify | Set only the details that apply to the question</h4></div>
                    <hr>

                <!-- Descr input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="Descr" id="form1Example20" class="form-control" />
                    <label class="form-label" for="form1Example20">Description</label>
                </div> 

                <!-- Qtext input --> 
                <div class="form-outline mb-4">
                    <input type="text" name="Qtext" id="form1Example16" class="form-control" />
                    <label class="form-label" for="form1Example16">Question text</label>
                </div> 
                                          
                <!-- User ID needs to be set manually -->

                <!-- UpperBounds input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="UpperBounds" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Set Upper Bounds | 0 if none</label>
                </div>  

                <!-- LowerBounds input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="LowerBounds" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Set Lower Bounds | 0 if none</label>
                </div>  

                <!-- WithBounds needs to be set manually -->

                <!-- NCID needs to be set manually -->

                <!-- Awnsers input --> 
                <div class="form-outline mb-4">
                    <input type="number" name="Awnser" id="form1Example15" class="form-control" />
                    <label class="form-label" for="form1Example14">Enter the awnsers | separate with ,</label>
                </div>  

                <!-- Single Choice, MCID, AwnserID need to be set manually -->

                <!-- Submit button -->
                <button type="submit" name="ModifyQuestion" class="btn btn-primary btn-block">Submit</button>
                <br>
                </form>

        </div>
        </div>
    </div>
    </div>

    <br>

    <!-- Last Button to view the company manager and simple user options -->
    <div class="p-3">
    <!-- Buttons do not work -->
    <button href="CompanyManagerHomePage.php" class="btn btn-primary btn-block">View Options regarding Showing additional Information</button>
    <br>
    <div class="w-50" style="margin-left: 25.5%;">
    <button type="submit" name="disconnect" class="btn btn-primary btn-block">Disconnect</button>
    </div>
    </div>

    <?php
    if(isset($_POST['disconnect'])) { 
    echo "Clossing session and redirecting to start page"; 
    session_unset();
    session_destroy();
    die('<meta http-equiv="refresh" content="2; url=index.php" />');
    } 
    ?> 


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.js"></script>
    </body>
</html>