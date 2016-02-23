<!DOCTYPE html>

<!--
		THINGS TO DO
			Photos
			Formatting/layout
			Check chinese
			Add extra terms/tips
			Images spinning/translating/fading
			Improve popups - jquery
			Colour scheme
			Parallax scrolling
-->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Pao Hu Zi -- An Illustrated Guide</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable = no">

	<link rel="stylesheet" type="text/css" href="css/normalise.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<script src="js/jquery-1.10.2.min.js"></script>

</head>
<body>
	<nav id="main-menu">
		<ul>
			<li><a class="scroll" href="#home">Home</a></li>
			<li><a class="scroll" href="#history">History</a></li>
			<li><a class="scroll" href="#cards">The Cards</a></li>
			<li><a class="scroll" href="#gameplay">Gameplay</a></li>
			<li><a class="scroll" href="#hands">hands</a></li>
			<li><a class="scroll" href="#scoring">Scoring</a></li>
			<li><a class="scroll" href="#info">Extra Info</a></li>
		</ul>
	</nav>

	<div id="frame">
		<div id="content">
			<div id="bg-shapes">
				<div class="home shape"></div>
				<div class="history shape"></div>
				<div class="card shape"></div>
				<div class="gameplay shape"></div>
				<div class="hands shape"></div>
				<div class="scoring shape"></div>
				<div class="info shape"></div>
			</div>
			<div id="homebg" class="backgrounds"></div>
			<div id="historybg" class="backgrounds"></div>
			<div id="cardbg" class="backgrounds"></div>
			<div id="gameplaybg" class="backgrounds"></div>
			<div id="handsbg" class="backgrounds"></div>
			<div id="scoringbg" class="backgrounds"></div>
			<div id="infobg" class="backgrounds"></div>
			<div id="bottombg" class="backgrounds"></div>
			<section id="home">
				<article>
					<h1>跑胡子<br/>An Illustrated Guide</h1>
				</article>
			</section>

			<!-- History -->
			<section id="history">
				<article>
					<h1><span class="headline">H</span><span class="headline">i</span><span class="headline">s</span><span class="headline">t</span><span class="headline">o</span><span class="headline">r</span><span class="headline">y</span></h1>
					<p><span class="chinese">跑胡子<span>跑胡子<br/><font style="color: #777;">pǎohúzi</font><br/><font style="color: #446CB3;">escape the thief</font></span></span>, <span class="chinese">字牌<span>字牌<br/><font style="color: #777;">zìpái</font><br/><font style="color: #446CB3;">character cards</font></span></span> or <span class="chinese">二十七牌<span>二十七牌<br/><font style="color: #777;">èrshíqī pái</font><br/><font style="color: #446CB3;">2, 10, 7 cards</font></span></span> is a three-player card game (there are also a two and four-player variations), almost exclusively played in southern China, with the most popular version originating in <span class="chinese">湖南<span>湖南<br/><font style="color: #777;">húnán</font><br/><font style="color: #446CB3;">Hunan Province</font></span></span>. The game is also played in both <span class="chinese">四川<span>四川<br/><font style="color: #777;">sìchuān</font><br/><font style="color: #446CB3;">Sichuan Province</font></span></span> and <span class="chinese">广西<span>广西<br/><font style="color: #777;">guǎngxī</font><br/><font style="color: #446CB3;">Guangxi Province</font></span></span>, with some regional variations of the rules and some differences in the cards. Here we will discuss the variation played in <span class="chinese">广西<span>广西<br/><font style="color: #777;">guǎngxī</font><br/><font style="color: #446CB3;">Guangxi Province</font></span></span>.</p>
					<p>Outside of these provinces it is rarely seen in China, with even fewer people able to play it. But in these three provinces it is extremely popular, with both the young and old alike. It has many similarities to gin rummy, and <span class="chinese">麻将<span>麻将<br/><font style="color: #777;">májiàng</font><br/><font style="color: #446CB3;">mahjong</font></span></span>, the Chinese tile game (not the tile matching variation we know in the  West - where that came from I have no idea!). It is a game of skill and strategy, but inevitably also involves a certain degree of chance. Games are always played for money, with some specialist houses playing for over $1000 a game!</p>

				<!-- In a Nutshell -->
					<h2>The Game in a Nutshell</h2>
					<p>The game is played with a special set of 80 long, thin playing cards, split into four sets of two suits (big and small), numbered one to ten. Players take it in turns to pick up twenty cards from the pile, with the dealer picking up twenty-one cards, and then discarding one. The game then continues with each player drawing from the card pile or the discard pile and discarding one card. There are standard rules about stealing cards from other players and the order of play, however, many regional variations exist. The aim of the game it to use all twenty cards in your hand, in sets of two, three or four cards, which together add to a minimum number of points (agreed before the game begins).</p>
				</article>
			</section>

			<!-- The Cards -->
			<section id="cards">
				<article>
					<h1><span class="headline">T</span><span class="headline">h</span><span class="headline">e</span>&nbsp;<span class="headline">C</span><span class="headline">a</span><span class="headline">r</span><span class="headline">d</span><span class="headline">s</span></h1>
					<p>Below are the two suits, the small suit (written in Simplified Mandarin Chinese) and the big suit (usually written in Financial Mandarin Chinese - all the packs I've seen have used Traditional Financial Mandarin). The 2, 7 and 10 cards are usually coloured red, compared to the other numbers which are all in black.</p>

					<span class="suitbutton smallsuit" id="showsmallsuit">The Small Suit</span>&nbsp;&nbsp;&nbsp;<span class="suitbutton bigsuit" id="showbigsuit">The Big Suit</span>

			<div id="wrapper">
            	<ul id="index_cards-small">
                	<li id="card-1">
                    	<h3>1</h3>
                        <p class="bignumbers">One horizontal line.</p>
                    </li>
                    <li id="card-2">
                    	<h3>2</h3>
                    	<p class="bignumbers">Two horizontal lines.</p>
                    </li>
                    <li id="card-3">
                    	<h3>3</h3>
                        <p class="bignumbers">Three horizontal lines.</p>
                    </li>
                    <li id="card-4">
                    	<h3>4</h3>
                    	<p class="bignumbers">A box with two strokes inside.</p>
                   	</li>
                    <li id="card-5">
                    	<h3>5</h3>
                        <p class="bignumbers">Five strokes resembling a chair.</p>
                    </li>
                    <li id="card-6">
                    	<h3>6</h3>
                        <p class="bignumbers">Six strokes resembling a star.</p>
                    </li>
                    <li id="card-7">
                    	<h3>7</h3>
                        <p class="bignumbers">One of the three red cards, looks like an L with a line through it.</p>
                    </li>
                    <li id="card-8">
                    	<h3>8</h3>
                        <p class="bignumbers">Looks like a roof of a house.</p>
                    </li>
                    <li id="card-9">
                    	<h3>9</h3>
                        <p class="bignumbers">Similar to the 7 card, but without the bottom line.</p>
                    </li>
                    <li id="card-10">
                    	<h3>10</h3>
                        <p class="bignumbers">This looks like a cross.</p>
                    </li>
                </ul>
            	<ul id="index_cards-big">
                	<li id="card-1">
                    	<h3>1</h3>
                        <p class="bigbignumbers">Similar to the number 10, a line in the middle, but the 1 card is black and the 10 card is red.</p>
                    </li>
                    <li id="card-2">
                    	<h3>2</h3>
                    	<p class="bigbignumbers">One of the three red cards in the pack, and has two horizontal lines in a box on the left.</p>
                    </li>
                    <li id="card-3">
                    	<h3>3</h3>
                        <p class="bigbignumbers">The 3 card has three horizontal lines in the middle, similar to the small 3 card.</p>
                    </li>
                    <li id="card-4">
                    	<h3>4</h3>
                    	<p class="bigbignumbers">The 4 card has four horizontal lines in the middle, similar to the small 4 card.</p>
                   	</li>
                    <li id="card-5">
                    	<h3>5</h3>
                        <p class="bigbignumbers">The 5 card is the same as the small 5 card with the person radical on the left.</p>
                    </li>
                    <li id="card-6">
                    	<h3>6</h3>
                        <p class="bigbignumbers">The 6 card has the Greek letter beta on the left-hand side.</p>
                    </li>
                    <li id="card-7">
                    	<h3>7</h3>
                        <p class="bigbignumbers">The 7 card has the small seven character at the top of the card.</p>
                    </li>
                    <li id="card-8">
                    	<h3>8</h3>
                        <p class="bigbignumbers">If you look closely in the middle, you can see the small eight character.</p>
                    </li>
                    <li id="card-9">
                    	<h3>9</h3>
                        <p class="bigbignumbers">The 9 card looks like a distorted small 9 card with the king radical on the left.</p>
                    </li>
                    <li id="card-10">
                    	<h3>10</h3>
                        <p class="bigbignumbers">See the 1 card.</p>
                    </li>
                </ul>
            </div>
				</article>
			</section>

			<!-- Gameplay -->
			<section id="gameplay">
				<article>
					<h1><span class="headline">G</span><span class="headline">a</span><span class="headline">m</span><span class="headline">e</span><span class="headline">p</span><span class="headline">l</span><span class="headline">a</span><span class="headline">y</span></h1>
					<p>The cards are first shuffled (see the Additional Information section) a few times by the dealer (who is chosen at random for the first game, after which the winner of the last game becomes the dealer of the next game), then the person to the dealer's left cuts the pack. The dealer draws from the cut pile, each player then takes it in turn to draw one card each until the dealer picks up a twenty-first card. This card must first be shown to all players, then placed in the dealer's hand. The dealer then discards one card, leaving them with twenty cards in their hand (as everyone else).</p>
					<p>The player to the right of the dealer either picks up the discarded dealers card or draws from the pile. This drawing and discarding of cards continues until one player is able to group all their cards in sets of two, three or four and have enough points to finish (usually 10 or 15 points).</p>

					<h2>Eating</h2>
					<p>By calling '<span class="chinese">吃<span>吃<br/><font style="color: #777;">chī</font><br/><font style="color: #446CB3;">to eat</font></span></span>' you can take a discarded card from the previous player, only to be used in a run or a mixed set of three same-numbered cards. This card must be played straight away (it must also not go into your hand, just turned over and placed face up on the table). Also, any other card of the same value, e.g. if you steal a big 7, so make a run of big 7, 8 and 9, but also have a big 7 in your hand, you must use this big 7 e.g. in a big 7 and two small 7's.</p>

					<p>If you call and another person 'bumps', they will get the card.</p>

					<h2>Bumping</h2>
					<p>By calling '<span class="chinese">碰<span>碰<br/><font style="color: #777;">pèng</font><br/><font style="color: #446CB3;">to bump/knock</font></span></span>' you can take a card discarded by any other player, but it must be used immediately in a set of three cards of the same number and suit. These three cards are then placed face up on the table if you picked up from the discard pile, or placed face down if drawn from the pack. In the event of two players calling at the same time, the person who's turn it is next will get the card.</p>

					<h2>Penalties</h2>
					<p>All fouls carry a monetary penalty, which are decided upon before the game begins.</p>
					<ul>
						<li>As the dealer, picking up more than 21 cards (<span class="chinese">XX<span>XX<br/><font style="color: #777;">XX</font><br/><font style="color: #446CB3;">XX</font></span></span>).</li>
						<li>Not winning a game if you are able to.</li>
						<li>Calling '<span class="chinese">和<span>和<br/><font style="color: #777;">hù</font><br/><font style="color: #446CB3;">to win</font></span></span>' on a non-winning hand.</li>
						<li>Not telling the next player to '<span class="chinese">照<span>照<br/><font style="color: #777;">zhào</font><br/><font style="color: #446CB3;">pick up</font></span></span>' when you get a second four of a kind.</li>
					</ul>
				</article>
			</section>

			<!-- Hands -->
			<section id="hands">
				<article>
					<h1><span class="headline">H</span><span class="headline">a</span><span class="headline">n</span><span class="headline">d</span><span class="headline">s</span></h1>
						<h2>Runs</h2>
						<p>A run consists of three cards of the same suit in ascending order. The first type is three consecutive cards, e.g. 2, 3 and 4. Most runs are not worth any points, but a run of 1, 2 and 3 is worth points, as well as the special 2, 7 and 10 run (all the red cards).</p>

						<h2>Pairs</h2>
						<p>You can only use a pair (of the same suit) if you have a group of four to go with it. See the following section.</p>

						<h2>Three of a Kind</h2>
						<p>If you have two of the same suit and number in your hand, and draw a third from the deck, you must make a set of three, and place them face down on the table. If someone discards the third of your set, you don't have to pick it up.</p>

						<h2>Four of a Kind</h2>
						<p>'<span class="chinese">开扫<span>开扫<br/><font style="color: #777;">kāisǎo</font><br/><font style="color: #446CB3;">four of a kind</font></span></span>' is when you already have three cards of the same number and suit in your hand and you draw the fourth, either from the discard pile or the deck. You don't have to pick up this card, but if you do, you must place all four cards on the table, face up if drawn from the discard pile, and face down if drawn from the deck. By having a four of a kind, you cannot finish with seven sets of three, in this instance you finish on a set of four, a pair (same number and suit) and five sets of three.</p>
						<p>If you already have one set of four, and pick up a second set of four you must say '<span class="chinese">照<span>照<br/><font style="color: #777;">zhào</font><br/><font style="color: #446CB3;">pick up</font></span></span>', telling the next player to pick up a card from the deck.</p>
						<p><span style="vertical-align: super;">†</span>Sets of three and four cannot be split up and used for mixed sets and/or runs.</p>
				</article>
			</section>

			<!-- Scoring -->
			<section id="scoring">
				<article>
					<h1><span class="headline">S</span><span class="headline">c</span><span class="headline">o</span><span class="headline">r</span><span class="headline">i</span><span class="headline">n</span><span class="headline">g</span></h1>
					<p>The following table shows the points available for each set in your hand. At the end of the game, cards in your hand (or face down on the table) are worth more points than sets face up on the table, the large and small suits are also worth different amount of points.</p>
					<p>See the table below - small numbers (big numbers).</p>

					<table class="points" border=1>
					<tr>
						<th colspan=2>Hand</th><th>In hand or Face Down</th><th>Face Up</th>
					</tr>
					<tr>
						<td>3 card run (same size)</td><td><img src="img/3-card-run.png"/></td><td colspan=2>0</td>
					</tr>

					<tr>
						<td>1, 2, 3 (same size)</td><td><img src="img/1-2-3.png"/></td><td>3 (6)</td><td>3 (6)</td>
					</tr>

					<tr>
						<td>2, 7, 10 (same size)</td><td><img src="img/2-7-10.png"/></td><td>3 (6)</td><td>3 (6)</td>
					</tr>

					<tr>
						<td>3 of a kind (mixed)</td><td><img src="img/3-mix.png"/></td><td colspan=2>0</td>
					</tr>

					<tr>
						<td>3 of a kind (same size)</td><td><img src="img/3-same.png"/></td><td>3 (6)</td><td>1 (3)</td>
					</tr>

					<tr>
						<td>4 of a kind (same size)</td><td><img src="img/4-same.png"/></td><td>9 (12)</td><td>6 (9)</td>
					</tr>

				</table>
				</article>
			</section>

			<!-- Additional Info -->
			<section id="info">
				<article>
					<h1><span class="headline">E</span><span class="headline">x</span><span class="headline">t</span><span class="headline">r</span><span class="headline">a</span>&nbsp;<span class="headline">I</span><span class="headline">n</span><span class="headline">f</span><span class="headline">o</span></h1>

					<h3>Gambling</h3>
					<p>Before the game, the stakes will be agreed upon. A standard example would be a 2, 3, 4 - at the end of the game all the points are counted (including bonus points, if any) and in this example, 10 points would be equal to 2元, 15 points would be 3元, i.e. if the winner got 11 points, each player would give the winner 2元.</p>
					<p>Usually if a person discards the card that allows the next player to win, that player must pay the winner double, the other player need not pay.</p>

				<h3>Tips</h3>
					<ul>
						<li>When drawing cards at the beginning of the game, group your cards in sets of three, seven sets is equal to 21 cards, so you should not foul.</li>
						<li>More tips to follow...</li>
					</ul>

					<h3>Useful Terms</h3>
					<table class="terms">
						<colgroup>
							<col width=150>
							<col width=150>
							<col width=150>
						</colgroup>
						<tr>
							<td>shuffle</td><td>xǐpái</td><td>洗牌</td>
						</tr>
						<tr>
							<td>eat</td><td>chī</td><td>吃</td>
						</tr>
						<tr>
							<td>bump</td><td>pèng</td><td>碰</td>
						</tr>
						<tr>
							<td>win</td><td>hù</td><td>和</td>
						</tr>
						<tr>
							<td>pick up</td><td>zhào</td><td>照</td>
						</tr>
						<tr>
							<td>four of a kind</td><td>kāisǎo</td><td>开扫</td>
						</tr>
					</table>
				</article>
			</section>
		</div>
	</div>
</body>

<!-- SMOOTH SCROLL -->
<script>
 $(".scroll").click(function(event){
         event.preventDefault();
         //calculate destination place
         var dest = 0;

         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 1000,'swing');
     });
</script>

<script>
$(document).ready(function(){
	$("#showbigsuit").click(function(){
		$("#index_cards-small").hide(1000);
		$("#index_cards-big").show(1000);
	});
	$("#showsmallsuit").click(function(){
		$("#index_cards-big").hide(1000);
		$("#index_cards-small").show(1000);
	});
});
</script>
</html>
