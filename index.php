<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <style>
        form{

        }
        body {
            font-family: "arial";
        }
        .dropdown {
            margin:2px;
        }
        input:focus::-webkit-input-placeholder{
            color: transparent!important;
        }
        input:focus::-moz-placeholder{
            color: transparent!important;
        }
        input:focus:-moz-placeholder{
            color: transparent!important;
        }
        textarea:focus::-webkit-input-placeholder{
            color: transparent!important;
        }
        textarea:focus::-moz-placeholder{
            color: transparent!important;
        }
        textarea:focus:-moz-placeholder{
            color: transparent!important;
        }
        .button-submit {
            color: #ffffff;
            cursor: pointer;
            display: inline-block;
            line-height: 35px;
            background: #4664dc;
            padding: 0px 20px;
            vertical-align: middle;
            font-size: 18px;
            min-width: 80px;
            min-height: 35px;
            font-family: Segoe UI;
            border: 1px solid transparent;
            margin: 5px;
        }
        .question {
            padding-bottom: 15px;
            overflow:hidden;
        }
        .questionAsk{
            text-align:right;
        }
        .questionHeader {
            font-size: 1em;
            font-weight: bold;
        }
        .questionAnswer {

        }
        input {
            display:inline;
        }
        .questionDescription{
            font-size: .9em;
            font-style: italic;
        }
        .longInput{
            width: 400px;
            height: 80px;
        }
        textarea,
        text{
            focus:
        }
    </style>
</head>
<body>
<script type="text/javascript" >
    var lastSelection = "Monk";
    function displayQuestion(answer) {
        document.getElementById('mainSpec').hidden = false;
        document.getElementById('offSpec').hidden = false;
        document.getElementById(lastSelection).style.display = "none";
        document.getElementById(answer).style.display = "block";
        lastSelection = answer;
    }
    function displayQuestion1(answer) {
        if (document.getElementById(answer).style.display === "inline"){
            document.getElementById(answer).style.display = "none";
        }else{
            document.getElementById(answer).style.display = "inline";
        }
    }
    function otherText() {
        if(document.getElementById('otherCheck').checked) {
            document.getElementById("other").setAttribute("style", "display:inline")
            document.getElementById("other").focus();
        }else if(document.getElementById('otherCheck').checked === false) {
            document.getElementById("other").setAttribute("style", "display:none")
            document.getElementById("other").value = "";
        }
    }
    function displayQuestionOffSpec(answer) {
        var switcher = 'offSpec';
        if (answer === 'yes'){
            document.getElementById(switcher + 'Prof').hidden = false;
            document.getElementById(switcher + 'Class').hidden = false;
            document.getElementById(lastSelection + '0').style.display = "inline";
        }else{
            document.getElementById(switcher).hidden = true;
        }
    }
</script>
<div class="col-lg-2"></div>
<div class="col-lg-8">
    <form>
        <div id="btag" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Battle.Net tag</div>
                <div class="questionDescription"></div>
            </div>
            <div class="questionAnswer col-lg-8">
                <input id="btagText" class="shortInput" type="text" placeholder="Example#9001"/>
            </div>
        </div>
        <div id="age" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Age</div>
                <div class="questionDescription">This is an adult guild, you must be 18 or older to apply.</div>
            </div>
            <div class="questionAnswer col-lg-8">
                <input class="shortInput" type="text" placeholder="18"/>
            </div>
        </div>
        <div id="characterName" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Character name</div>
                <div class="questionDescription"></div>
            </div>
            <div class="questionAnswer col-lg-8">
                <input class="shortInput" type="text" value=""/>
            </div>
        </div>
        <div id="server" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Server</div>
                <div class="questionDescription"></div>
            </div>
            <div class="questionAnswer col-lg-8">
                <input class="shortInput" type="text" value=""/>
            </div>
        </div>
        <div id="logs" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Link your character's WarcraftLogs</div>
                <div class="questionDescription">WorldofLogs works too</div>
            </div>
            <div class="questionAnswer col-lg-8">
                <input class="shortInput" type="text" placeholder="warcraftlogs.com/example"/>
            </div>
        </div>
        <div id="mainClass" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">What class do you main?</div>
                <div class="questionDescription"></div>
            </div>
            <div class="questionAnswer col-lg-8">
                <select name="mainClass" onchange="displayQuestion(this.value);">
                    <option value="" selected disabled>Main Class</option>
                    <option value="Death Knight">Death Knight</option>
                    <option value="Druid">Druid</option>
                    <option value="Hunter">Hunter</option>
                    <option value="Mage">Mage</option>
                    <option value="Monk">Monk</option>
                    <option value="Paladin">Paladin</option>
                    <option value="Priest">Priest</option>
                    <option value="Rogue">Rogue</option>
                    <option value="Shaman">Shaman</option>
                    <option value="Warlock">Warlock</option>
                    <option value="Warrior">Warrior</option>
                </select>
            </div>
        </div>
        <div id="mainSpec" class="question" hidden>
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">What is your main spec?</div>
                <div class="questionDescription"></div>
            </div>
            <div class="questionAnswer col-lg-8">
                <select name="dkSpec" style="display: none;" id="Death Knight">
                    <option value="Blood">Blood</option>
                    <option value="Frost">Frost</option>
                    <option value="Unholy">Unholy</option>
                </select>
                <select name="druidSpec" style="display:none;" id="Druid">
                    <option value="Balance">Balance</option>
                    <option value="Feral">Feral</option>
                    <option value="Guardian">Guardian</option>
                    <option value="Restoration">Restoration</option>
                </select>
                <select name="hunterSpec" style="display:none;" id="Hunter">
                    <option value="BeastMastery">Beast Mastery</option>
                    <option value="Marksmanship">Marksmanship</option>
                    <option value="Survival">Survival</option>
                </select>
                <select name="mageSpec" style="display:none;" id="Mage">
                    <option value="Arcane">Arcane</option>
                    <option value="Fire">Fire</option>
                    <option value="Frost">Frost</option>
                </select>
                <select name="monkSpec" style="display:none;" id="Monk">
                    <option value="Brewmaster">Brewmaster</option>
                    <option value="Mistweaver">Mistweaver</option>
                    <option value="Windwalker">Windwalker</option>
                </select>
                <select name="paladinSpec" style="display:none;" id="Paladin">
                    <option value="Holy">Holy</option>
                    <option value="Protection">Protection</option>
                    <option value="Retribution">Retribution</option>
                </select>
                <select name="priestSpec" style="display:none;" id="Priest">
                    <option value="Discipline">Discipline</option>
                    <option value="Holy">Holy</option>
                    <option value="Shadow">Shadow</option>
                </select>
                <select name="rogueSpec" style="display:none;" id="Rogue">
                    <option value="Assassination">Assassination</option>
                    <option value="Combat">Combat (Outlaw)</option>
                    <option value="Subtlety">Subtlety</option>
                </select>
                <select name="shamanSpec" style="display:none;" id="Shaman">
                    <option value="Elemental">Elemental</option>
                    <option value="Enhancement">Enhancement</option>
                    <option value="Restoration">Restoration</option>
                </select>
                <select name="warlockSpec" style="display:none;" id="Warlock">
                    <option value="Affliction">Affliction</option>
                    <option value="Demonology">Demonology</option>
                    <option value="Destruction">Destruction</option>
                </select>
                <select name="warriorSpec" style="display:none;" id="Warrior">
                    <option value="Arms">Arms</option>
                    <option value="Fury">Fury</option>
                    <option value="Protection">Protection</option>
                </select>
            </div>
        </div>
        <div id="offSpec" class="question" hidden>
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Do you have an offspec you are willing to play?</div>
                <div class="questionDescription"></div>
            </div>
            <div class="questionAnswer col-lg-8">
                <input onchange="displayQuestionOffSpec(this.value)" name="offSpec" type="radio" value="yes">Yes
                <input onchange="displayQuestionOffSpec(this.value)" name="offSpec" type="radio" value="no">No
            </div>
            <div id="offSpecClass" class="questionAnswer col-lg-8" style="display:inline" hidden>
                <select name="dkSpec0" style="display: none;" id="Death Knight">
                    <option value="Blood">Blood</option>
                    <option value="Frost">Frost</option>
                    <option value="Unholy">Unholy</option>
                </select>
                <select name="druidSpec0" style="display:none;" id="Druid">
                    <option value="Balance">Balance</option>
                    <option value="Feral">Feral</option>
                    <option value="Guardian">Guardian</option>
                    <option value="Restoration">Restoration</option>
                </select>
                <select name="hunterSpec0" style="display:none;" id="Hunter">
                    <option value="BeastMastery">Beast Mastery</option>
                    <option value="Marksmanship">Marksmanship</option>
                    <option value="Survival">Survival</option>
                </select>
                <select name="mageSpec0" style="display:none;" id="Mage">
                    <option value="Arcane">Arcane</option>
                    <option value="Fire">Fire</option>
                    <option value="Frost">Frost</option>
                </select>
                <select name="monkSpec0" style="display:none;" id="Monk">
                    <option value="Brewmaster">Brewmaster</option>
                    <option value="Mistweaver">Mistweaver</option>
                    <option value="Windwalker">Windwalker</option>
                </select>
                <select name="paladinSpec0" style="display:none;" id="Paladin">
                    <option value="Holy">Holy</option>
                    <option value="Protection">Protection</option>
                    <option value="Retribution">Retribution</option>
                </select>
                <select name="priestSpec0" style="display:none;" id="Priest">
                    <option value="Discipline">Discipline</option>
                    <option value="Holy">Holy</option>
                    <option value="Shadow">Shadow</option>
                </select>
                <select name="rogueSpec0" style="display:none;" id="Rogue">
                    <option value="Assassination">Assassination</option>
                    <option value="Combat">Combat (Outlaw)</option>
                    <option value="Subtlety">Subtlety</option>
                </select>
                <select name="shamanSpec0" style="display:none;" id="Shaman">
                    <option value="Elemental">Elemental</option>
                    <option value="Enhancement">Enhancement</option>
                    <option value="Restoration">Restoration</option>
                </select>
                <select name="warlockSpec0" style="display:none;" id="Warlock">
                    <option value="Affliction">Affliction</option>
                    <option value="Demonology">Demonology</option>
                    <option value="Destruction">Destruction</option>
                </select>
                <select name="warriorSpec0" style="display:none;" id="Warrior">
                    <option value="Arms">Arms</option>
                    <option value="Fury">Fury</option>
                    <option value="Protection">Protection</option>
                </select>
            </div>
        </div>
        <div id="offSpecProf" class="question" hidden>
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">How proficient are you at your offspec?</div>
                <div class="questionDescription">Please be honest, we'll find out either way.</div>
            </div>
            <div class="questionAnswer col-lg-8">
                <input type="radio" name="offSkill" value="1"> A literal god, tasteless<br>
                <input type="radio" name="offSkill" value="2"> Above average<br>
                <input type="radio" name="offSkill" value="3"> Average<br>
                <input type="radio" name="offSkill" value="4"> Below Average<br>
                <input type="radio" name="offSkill" value="5"> I only have it so I can queue for bonus satchels<br>
            </div>
        </div>
        <div id="altClasses" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Do you have any alts you would be willing to play if needed?</div>
                <div class="questionDescription">and their specs??</div>
            </div>
            <div class="questionAnswer col-lg-8">
                <div class="col-lg-4" style="padding: 0" >
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Death Knight1"> Death Knight<br>
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Druid1"> Druid<br>
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Hunter1"> Hunter<br>
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Mage1"> Mage<br>
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Monk1"> Monk<br>
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Paladin1"> Paladin
                </div>
                <div class="col-lg-4">
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Priest1"> Priest<br>
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Rogue1"> Rogue<br>
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Shaman1"> Shaman<br>
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Warlock1"> Warlock<br>
                    <input onchange="displayQuestion1(this.value)" type="checkbox" name="class2" value="Warrior1"> Warrior<br>
                </div>
            </div>
            <div class="questionAsk col-lg-4"></div>
            <div class="questionAnswer col-lg-8">
                <select name="dkSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Death Knight1">
                    <option value="Blood">Blood</option>
                    <option value="Frost">Frost</option>
                    <option value="Unholy">Unholy</option>
                </select>
                <select name="druidSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Druid1">
                    <option value="Balance">Balance</option>
                    <option value="Feral">Feral</option>
                    <option value="Guardian">Guardian</option>
                    <option value="Restoration">Restoration</option>
                </select>
                <select name="hunterSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Hunter1">
                    <option value="BeastMastery">Beast Mastery</option>
                    <option value="Marksmanship">Marksmanship</option>
                    <option value="Survival">Survival</option>
                </select>
                <select name="mageSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Mage1">
                    <option value="Arcane">Arcane</option>
                    <option value="Fire">Fire</option>
                    <option value="Frost">Frost</option>
                </select>
                <select name="monkSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Monk1">
                    <option value="Brewmaster">Brewmaster</option>
                    <option value="Mistweaver">Mistweaver</option>
                    <option value="Windwalker">Windwalker</option>
                </select>
                <select name="paladinSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Paladin1">
                    <option value="Holy">Holy</option>
                    <option value="Protection">Protection</option>
                    <option value="Retribution">Retribution</option>
                </select>
                <select name="priestSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Priest1">
                    <option value="Discipline">Discipline</option>
                    <option value="Holy">Holy</option>
                    <option value="Shadow">Shadow</option>
                </select>
                <select name="rogueSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Rogue1">
                    <option value="Assassination">Assassination</option>
                    <option value="Combat">Combat (Outlaw)</option>
                    <option value="Subtlety">Subtlety</option>
                </select>
                <select name="shamanSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Shaman1">
                    <option value="Elemental">Elemental</option>
                    <option value="Enhancement">Enhancement</option>
                    <option value="Restoration">Restoration</option>
                </select>
                <select name="warlockSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Warlock1">
                    <option value="Affliction">Affliction</option>
                    <option value="Demonology">Demonology</option>
                    <option value="Destruction">Destruction</option>
                </select>
                <select name="warriorSpec1" style="display:none; margin-bottom: 1px; margin-top: 2px;" id="Warrior1">
                    <option value="Arms">Arms</option>
                    <option value="Fury">Fury</option>
                    <option value="Protection">Protection</option>
                </select>
            </div>
        </div>
        <div id="raidExp" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Tell us about your raiding experience</div>
                <div class="questionDescription">When you started, notable achievements, etc.</div>
            </div>
            <div class="questionAnswer col-lg-8">
                <textarea class="longInput" type="text" placeholder="Well you see when I was a young boy..."></textarea>
            </div>
        </div>
        <div id="raidPrep" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">What do you do to prepare yourself for a completely new boss encounter that you have personally never experienced?</div>
                <div class="questionDescription"></div>
            </div>
            <div class="questionAnswer col-lg-8">
                <textarea class="longInput" type="text" placeholder="I.e. 'I basically just log on 2 minutes before raid and hope someone stocked the gbank'"></textarea>
            </div>
        </div>
        <div id="raidProg" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">If your current raid progress is below average, what is the reasoning behind it?</div>
                <div class="questionDescription">Nothing too in-depth, just a brief explanation</div>
            </div>
            <div class="questionAnswer col-lg-8">
                <textarea class="longInput" type="text" placeholder="I.e. 'I got caught drinking and my mom grounded me so I missed all of HFC progression'"></textarea>
            </div>
        </div>
        <div id="attendance" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Attendance</div>
                <div class="questionDescription">How often can you make raids?</div>
            </div>
            <div class="questionAnswer col-lg-8">
                <input type="radio" name="attendance" value="1"> I can make 100% of raids<br>
                <input type="radio" name="attendance" value="2"> I can make 75% of raids<br>
                <input type="radio" name="attendance" value="3"> I can make 50% of raids
            </div>
        </div>
        <div id="voice" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">How vocal are you during raids?</div>
                <div class="questionDescription"></div>
            </div>
            <div class="questionAnswer col-lg-8">
                (Quite vocal) 1
                <input type="radio" name="voice" value="1">
                <input type="radio" name="voice" value="2">
                <input type="radio" name="voice" value="3">
                <input type="radio" name="voice" value="4">
                <input type="radio" name="voice" value="5"> 5 (I don't have a mic)
            </div>
        </div>
        <div id="challengeModes" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Have you personally completed all of the challenge mode dungeons on gold?</div>
                <div class="questionDescription">Carries don't count</div>
            </div>
            <div class="questionAnswer col-lg-8">
                <input onchange="otherText()" type="radio" name="challengeModes" value="1"> Yes, they were cake<br>
                <input onchange="otherText()" type="radio" name="challengeModes" value="2"> Yes<br>
                <input onchange="otherText()" type="radio" name="challengeModes" value="3"> Tried, but failed<br>
                <input onchange="otherText()" type="radio" name="challengeModes" value="4"> Never tried<br>
                <span style="vertical-align: top;" ><input style="vertical-align: top" onchange="otherText()" id="otherCheck" type="radio" name="challengeModes" value="5">Other </span><textarea style="display: none" id="other"></textarea>
            </div>
        </div>
        <div id="healthstone" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Do you have Healing tonics/Shieldtronics/Healthstones keybound</div>
                <div class="questionDescription"></div>
            </div>
            <div class="questionAnswer col-lg-8">
                <input type="radio" name="healthstones" value="1"> Yes<br>
                <input type="radio" name="healthstones" value="2"> No<br>
                <input type="radio" name="healthstones" value="3"> I'm a clicker
            </div>
        </div>
        <div id="whyLeave" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Why are you leaving your current guild?</div>
                <div class="questionDescription"></div>
            </div>
            <div class="questionAnswer col-lg-8">
                <textarea class="longInput" type="text" placeholder="I.e. 'The guild leader liked to snort really loudly into mumble every time he gave orders'"></textarea>
            </div>
        </div>
        <div id="bonusMemes" class="question">
            <div class="questionAsk col-lg-4">
                <div class="questionHeader">Anything else to add to your application that you feel will give us a better idea of your skill and attitude as a player?</div>
                <div class="questionDescription">We care just as much about personality as player skill</div>
            </div>
            <div class="questionAnswer col-lg-8">
                <textarea class="longInput" type="text" placeholder="My ancestors are smiling upon me, imperial. Can you say the same?"></textarea>
            </div>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-8"><button class="button-submit" type="submit" value="dicks">dicks</button>
        </div>

    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>






