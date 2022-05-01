<form action="/save-my-order" method="POST" 
style="display: flex; flex-direction: column; width: auto; height: 100%;">
	<h3>Place an order</h3>
	<div style="margin-top: 10px; display: flex; flex-direction: column;">
		<label class="input" for="name">YOUR NAME: </label>
		<input class="input" type="text" placeholder="Please write your name here" id="name" required>
	</div>
	<div style="margin-top: 10px; display: flex; flex-direction: column;">
	    <label for="amount">Required amount of identical T-shirts</label>
		<input type="number" min="1" max="25" step="1" id="zurnalu-skaits">
	</div>
    <div style="margin-top: 10px; display: flex; flex-direction: column;">
        <label for="color">Required color for your T-shirt/-s</label>
			<select>
				<option value="white">White</option>
				<option value="black">Black</option>
				<option value="yellow">Yellow</option>
				<option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="brown">Brown</option>
                <option value="grey">Grey</option> 
			</select>
	</div>
    <div style="margin-top: 10px; display: flex; flex-direction: column;">
        <label for="size">Required size</label>
			<select>
				<option size="XS">XS</option>
				<option size="S">S</option>
				<option size="M">M</option>
				<option size="L">L</option>
                <option size="XL">XL</option>
                <option size="XXL">XXL</option>
                </select>
    </div>
    <div style="margin-top: 10px; display: flex; flex-direction: column;">
        <label for="print">Choose your favorite print</label>
			<select>
				<option print="print1">Print pic 1</option>
				<option print="print2">Print pic 2</option>
				<option print="print3">Print pic 3</option>
				<option print="print4">Print pic 4</option>
                <option print="print5">Print pic 5</option>
                <option print="print6">Print pic 6</option>
            </select>
    </div>
	<div style="margin-top: 10px; display: flex; flex-direction: column;">
        <label class="input" for="email">Your e-mail address: </label>
			<input class="input" type="text" placeholder="Please write your e-mail address here" id="name" required>
	</div>
    <div style="margin-top: 10px; display: flex; flex-direction: column;">
        <label class="input" for="feedback">
			Do you want to leave some words to the artist?</label>
            <textarea style="margin-top: 10px;" rows="5" cols="10" placeholder="Oh, I absolutely..." id="feedback"></textarea>
    </div>
    <div style="margin-top:10px">
		<input type="submit" value="CONFIRM"><h6>We will get in touch with you in no time. Promise.</h6>
	</div>
</form>
</html>