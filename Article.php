<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
  <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"> 
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="myjs.js"></script>
  <title>SpaceInvolved</title>
    
    <script>
$(document).ready(function(){
    $("#previousBtn").click(function(){
        $(".2ndpage").hide();
        $(".1stpage").show();
    });
    $("#nextBtn").click(function(){
        $(".1stpage").hide();
        $(".2ndpage").show();
    });
});
</script>
</head>
<body>
    
     <div class="navBar">
      <div class="text-center">
        <h1 id="titleText">SpaceInvolved</h1>
      </div>
      <hr>
      <div class="col-md-12 text-center">
        <h4 id="subtitle">- The last frontier. With ambition -  </h4>
      </div>
    </div>
    
    
    
  <div>
   
        </div>
    
  <div class="container-fluid">
    <div class="row" style="width:100%">
        
      <div class="sidenav col-md-3 sitemap">
       
         <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action list-group-item-dark active" id="list-robots-list" data-toggle="list" href="#list-robots" role="tab" aria-controls="robots">Space Robots</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-habitats-list" data-toggle="list" href="#list-habitats" role="tab" aria-controls="habitats">Space Habitats</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-planets-list" data-toggle="list" href="#list-planets" role="tab" aria-controls="planets">Planets / Exoplanets</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-persons-list" data-toggle="list" href="#list-persons" role="tab" aria-controls="persons">Successful persons in aerospace / Astronauts</a>
    <a class="list-group-item list-group-item-action list-group-item-dark" id="list-orbital-list" data-toggle="list" href="#list-orbital" role="tab" aria-controls="orbital">Orbital Mechanics</a>
    </div>
      </div>
        
        
        
      <div class="col-md-6 text-center content">
          
    <div class="tab-content" id="nav-tabContent">
        
      <div class="tab-pane fade show active" id="list-robots" role="tabpanel" aria-labelledby="list-robots-list">
          
    <div class="1stpage">
            <h3 id="content-title">Space Robots</h3>
            <p>Curiosity is a car-sized rover designed to explore Gale Crater on Mars as part of NASA's Mars Science Laboratory mission (MSL).[3] Curiosity was launched from Cape Canaveral on November 26, 2011, at 15:02 UTC aboard the MSL spacecraft and landed on Aeolis Palus in Gale Crater on Mars on August 6, 2012, 05:17 UTC.[7][8][13] The Bradbury Landing site was less than 2.4 km (1.5 mi) from the center of the rover's touchdown target after a 560 million km (350 million mi) journey.[9][14] The rover's goals include an investigation of the Martian climate and geology; assessment of whether the selected field site inside Gale Crater has ever offered environmental conditions favorable for microbial life, including investigation of the role of water; and planetary habitability studies in preparation for human exploration.[15][16]

              In December 2012, Curiosity's two-year mission was extended indefinitely.[17] On August 5, 2017, NASA celebrated the fifth anniversary of the Curiosity rover landing and related exploratory accomplishments on the planet Mars.[18][19] The rover is still operational, and as of November 5, 2018, Curiosity has been on Mars for 2222 sols (2282 total days) since landing on August 6, 2012. (See current status.)

              Curiosity's design will serve as the basis for the planned Mars 2020 rover.
              Goals and objectives

              As established by the Mars Exploration Program, the main scientific goals of the MSL mission are to help determine whether Mars could ever have supported life, as well as determining the role of water, and to study the climate and geology of Mars.[15][16] The mission will also help prepare for human exploration.[16] To contribute to these goals, MSL has eight main scientific objectives:[20]
              Biological
              Determine the nature and inventory of organic carbon compounds
        </p>
        </div>
          
        <div class="2ndpage" style="display:none">
            <h3 id="content-title">Space Robots</h3> 
          <p>
              We can send robots to explore space without having to worry so much about their safety. Of course, we want these carefully built robots to last. We need them to stick around long enough to investigate and send us information about their destinations. But even if a robotic mission fails, the humans involved with the mission stay safe.

                Sending a robot to space is also much cheaper than sending a human. Robots don’t need to eat or sleep or go to the bathroom. They can survive in space for many years and can be left out there—no need for a return trip!

                Plus, robots can do lots of things that humans can’t. Some can withstand harsh conditions, like extreme temperatures or high levels of radiation. Robots can also be built to do things that would be too risky or impossible for astronauts.
          </p>
        </div>   
          
    </div>
        
      <div class="tab-pane fade" id="list-habitats" role="tabpanel" aria-labelledby="list-habitats-list">Space Habitats</div>
      <div class="tab-pane fade" id="list-planets" role="tabpanel" aria-labelledby="list-planets-list">Planets / Exoplanets</div>
      <div class="tab-pane fade" id="list-persons" role="tabpanel" aria-labelledby="list-persons-list">Successful persons in aerospace / Astronauts</div>
        <div class="tab-pane fade" id="list-orbital" role="tabpanel" aria-labelledby="list-orbital-list">Orbital Mechanics</div>
    </div>
         
          
                  <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-info" id="previousBtn">Previous</button>
            <button  type="button" class="btn btn-info" id="nextBtn">Next</button>
          </div>
          
      </div>
        
        
        
        
      <div class="col-sm-2 sideTab">
        <h3>Annotations</h3>
        <p>Blablabla</p>
        <p>Blablabla</p>
      </div>
        
      <div class="col-sm-1 background">
      </div>           
    </div>  
  </div> 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
