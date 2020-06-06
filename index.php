<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<div id="target" style="overflow: scroll; width: 700px; height: 1000px;">
<h1>Test your knowledge!</h1>
<h2>Jeff's fun project</h2>
<p>- score means more wrong than right.</p>
<p>+ score means more right than wrong.</p>
<div>
  Score: <span id="score">0</span>
</div>
<div class="q">
  <p>1. What is the square root of 144?</p>
  <label>
    <input type="radio" name="a" yes>
    Twelve
  </label>

  <label>
    <input type="radio" name="a">
    Six
  </label>

  <label>
    <input type="radio" name="a">
    Four
    </label>
</div>

<div class="q">
  <p>2. What are the benefits of good sleep?</p>
  <label>
    <input type="radio" name="b" yes>
    A healthy body
  </label>

  <label>
    <input type="radio" name="b">
    Laziness
  </label>

  <label>
    <input type="radio" name="b">
    None of the above
    </label>
</div>

<div class="q">
  <p>3. What's the most healthy food</p>
  <label>
    <input type="radio" name="c">
    Pig fat
  </label>
  <label>
    <input type="radio" name="c">
    Milk chocolate
  </label>

  <label>
    <input type="radio" name="c" yes>
    Organic orange
  </label>
</div>

<div class="q">
  <p>4. What's the smallest?</p>
  <label>
    <input type="radio" name="d">
    electron
  </label>

  <label>
    <input type="radio" name="d">
    atom
  </label>

  <label>
    <input type="radio" name="d" yes>
    quark
    </label>
</div>

<div class="q">
  <p>5. Which force is stronger?</p>
  <label>
    <input type="radio" name="e">
    covalent bond
  </label>

  <label>
    <input type="radio" name="e" yes>
    ionic bond
  </label>

  <label>
    <input type="radio" name="e">
    metallic bond
    </label>
</div>

<div class="q">
  <p>6. What is the Nash equilibrium about?</p>
  <label>
    <input type="radio" name="f">
    survival
  </label>

  <label>
    <input type="radio" name="f">
    optimal outcome based on idealism
  </label>

  <label>
    <input type="radio" name="f" yes>
    optimal outcome based on human behavior
    </label>
</div>

<div class="q">
  <p>7. How do black holes come about?</p>
  <label>
    <input type="radio" name="g" yes>
    when a star collapses
  </label>

  <label>
    <input type="radio" name="g">
    it's all in your head
  </label>

  <label>
    <input type="radio" name="g">
    they've always been there
    </label>
</div>

<div class="q">
  <p>8. What is dark matter</p>
  <label>
    <input type="radio" name="h">
    it does not matter
  </label>

  <label>
    <input type="radio" name="h">
    it is the opposite of light matter
  </label>

  <label>
    <input type="radio" name="h" yes>
    matter that makes up most of the mass but cannot be observed
    </label>
</div>

<div class="q">
  <p>9. What is iambic pentameter?</p>
  <label>
    <input type="radio" name="i" yes>
    it is a type of metric line for poetry
  </label>

  <label>
    <input type="radio" name="i">
    a kind of dance steps
  </label>

  <label>
    <input type="radio" name="i" value="a cult" >
    a cult
    </label>
</div>

<div class="q">
  <p>10. What is cognitive dissonance?</p>
  <label>
    <input type="radio" name="j" yes>
    discomfort arising when beliefs and behavior does not align
  </label>

  <label>
    <input type="radio" name="j">
    it is a mental disorder
  </label>

  <label>
    <input type="radio" name="j">
    it is stupid thinking
    </label>
</div>
<br>
<button class="az" id="submit">Submit</button>

<p>Hello. Do you want to view <a href="jeff.html">Hope and despair?</a> ?</p>
<p>Hello. Do you want to view <a href="button.html">buttons</a> ?</p>
<p>Hello. Do you want to view <a href="life.html">The discrepancy</a> ?</p>
<p>Hello. Do you want to view <a href="havenot.html">What do I have?</a> ?</p>
<p>More about me?<a href="https://jefflikesto.wordpress.com/">My website</a>?<br />

<style>
body {
	background-color: black;
}

h1 {
    font-size: 300%;
    color: white;
    background-color: black;
}

.q {
    background-color: greenyellow;
}

.az {
  background-color: darkviolet; 
  border: none;
  color: papayawhip;
  padding: 12px 28px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
}

#score {
   font-size: 150%;
   color: darkgreen;
}
</style>

<script>
    $(document).ready(function(){
  $('#submit').on('click', function(){
    var score = 0;
    $('.q').each(function(){
    var ans = $(this).find(':checked[yes]').length;
        if( ans == true){
        score++;
        }else{
        score--;
      }
    });
$('#score').text(score);

  });
}); 
</script>
</div>
</body>

