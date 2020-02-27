<?php
// If a 'Foundation Sink' page doesn't exist, create one.
if ( null == get_page_by_title( 'Foundation Sink' ) ) {
	joints_create_foundation_sink();
}

function joints_create_foundation_sink() {
	$post_content = '
<div id="top-of-test"></div>
<h1>CSS Basic Elements</h1>
<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
<hr>



<h1>Headings</h1>
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>


<h1>Headings</h1>
<p>The skeleton dimensions I shall now proceed to set down are copied verbatim from my right arm, where I had them tattooed; as in my wild wanderings at that period, there was no other secure way of preserving such valuable statistics. But as I was crowded for space, and wished the other parts of my body to remain a blank page for a poem I was then composing—at least, what untattooed parts might remain—I did not trouble myself with the odd inches; nor, indeed, should inches at all enter into a congenial admeasurement of the whale.</p>
<h1>Heading 1 followed by a Paragraph</h1>
<p>The skeleton dimensions I shall now proceed to set down are copied verbatim from my right arm, where I had them tattooed; as in my wild wanderings at that period, there was no other secure way of preserving such valuable statistics. But as I was crowded for space, and wished the other parts of my body to remain a blank page for a poem I was then composing—at least, what untattooed parts might remain—I did not trouble myself with the odd inches; nor, indeed, should inches at all enter into a congenial admeasurement of the whale.</p>
<h2>Heading 2 followed by a Paragraph</h2>
<p>The skeleton dimensions I shall now proceed to set down are copied verbatim from my right arm, where I had them tattooed; as in my wild wanderings at that period, there was no other secure way of preserving such valuable statistics. But as I was crowded for space, and wished the other parts of my body to remain a blank page for a poem I was then composing—at least, what untattooed parts might remain—I did not trouble myself with the odd inches; nor, indeed, should inches at all enter into a congenial admeasurement of the whale.</p>
<h3>Heading 3 followed by a Paragraph</h3>
<p>The skeleton dimensions I shall now proceed to set down are copied verbatim from my right arm, where I had them tattooed; as in my wild wanderings at that period, there was no other secure way of preserving such valuable statistics. But as I was crowded for space, and wished the other parts of my body to remain a blank page for a poem I was then composing—at least, what untattooed parts might remain—I did not trouble myself with the odd inches; nor, indeed, should inches at all enter into a congenial admeasurement of the whale.</p>
<h4>Heading 4 followed by a Paragraph</h4>
<p>The skeleton dimensions I shall now proceed to set down are copied verbatim from my right arm, where I had them tattooed; as in my wild wanderings at that period, there was no other secure way of preserving such valuable statistics. But as I was crowded for space, and wished the other parts of my body to remain a blank page for a poem I was then composing—at least, what untattooed parts might remain—I did not trouble myself with the odd inches; nor, indeed, should inches at all enter into a congenial admeasurement of the whale.</p>
<h5>Heading 5 followed by a Paragraph</h5>
<p>The skeleton dimensions I shall now proceed to set down are copied verbatim from my right arm, where I had them tattooed; as in my wild wanderings at that period, there was no other secure way of preserving such valuable statistics. But as I was crowded for space, and wished the other parts of my body to remain a blank page for a poem I was then composing—at least, what untattooed parts might remain—I did not trouble myself with the odd inches; nor, indeed, should inches at all enter into a congenial admeasurement of the whale.</p>
<h6>Heading 6 followed by a Paragraph</h6>
<p>The skeleton dimensions I shall now proceed to set down are copied verbatim from my right arm, where I had them tattooed; as in my wild wanderings at that period, there was no other secure way of preserving such valuable statistics. But as I was crowded for space, and wished the other parts of my body to remain a blank page for a poem I was then composing—at least, what untattooed parts might remain—I did not trouble myself with the odd inches; nor, indeed, should inches at all enter into a congenial admeasurement of the whale.</p>


<small><a href="#top-of-test">[top]</a></small>
<hr>



<h1>Paragraph</h1>
<img style="width:350px;height:150px;float:right" src="http://placehold.it/350x150" alt="Placeholder Image">
<p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. <strong>Strong text</strong> convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
<small><a href="#top-of-test">[top]</a></small>
<hr>



<h1>List Types</h1>
<h3>Definition List</h3>
<dl>
	<dt>Definition List Title</dt>
	<dd>This is a definition list division.</dd>
</dl>
<h3>Ordered List</h3>
<ol>
	<li>List Item 1</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ol>
<h3>Unordered List</h3>
<ul>
	<li>List Item 1</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ul>
<h3>Ordered List with Ordered List Child</h3>
<ol>
	<li>List Item 1
		<ol>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ol>
	</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ol>
<h3>Ordered List with Unordered List Child</h3>
<ol>
	<li>List Item 1
		<ul>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ul>
	</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ol>
<h3>Unordered List with Unordered List Child</h3>
<ul>
	<li>List Item 1
		<ul>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ul>
	</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ul>
<h3>Unordered List with Ordered List Child</h3>
<ul>
	<li>List Item 1
		<ol>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ol>
	</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ul>
<small><a href="#top-of-test">[top]</a></small>
<hr>



<h1>Tables</h1>
<table cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<th>Table Header 1</th>
			<th>Table Header 2</th>
			<th>Table Header 3</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Division 1</td>
			<td>Division 2</td>
			<td>Division 3</td>
		</tr>
		<tr class="even">
			<td>Division 1</td>
			<td>Division 2</td>
			<td>Division 3</td>
		</tr>
		<tr>
			<td>Division 1</td>
			<td>Division 2</td>
			<td>Division 3</td>
		</tr>
	</tbody>
</table>
<small><a href="#top-of-test">[top]</a></small>
<hr>



<h1>Misc Stuff - abbr, acronym, pre, code, sub, sup, etc.</h1>
<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus. <abbr title="Avenue">AVE</abbr></p>
<pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus. <abbr title="Avenue">AVE</abbr></p>
</pre>
<blockquote> "This stylesheet is going to help so freaking much." <br>
  -Blockquote </blockquote>
<small><a href="#top-of-test">[top]</a></small>



<h1>Buttons</h1>

<h2>Sizing</h2>
<a class="button tiny" href="#">So Tiny</a> <a class="button small" href="#">So Small</a> <a class="button" href="#">So Basic</a> <a class="button large" href="#">So Large</a> <a class="button expanded" href="#">Such Expand</a> <a class="button small expanded" href="#">Wow, Small Expand</a> <button class=" button" disabled="">Disabled</button>

<h2>Coloring</h2>
<a class="button primary" href="#">Primary</a> <a class="button secondary" href="#">Secondary</a> <a class="button success" href="#">Success</a> <a class="button alert" href="#">Alert</a> <a class="button warning" href="#">Warning</a>

<h2>Hollow</h2>
<button class="hollow button" href="#">Primary</button> <button class="hollow button secondary" href="#">Secondary</button> <button class="hollow button success" href="#">Success</button> <button class="hollow button alert" href="#">Alert</button> <button class="hollow button warning" href="#">Warning</button> <button class="hollow button" href="#" disabled="">Disabled</button>

<h2>Clear</h2>
<button class="clear button" href="#">Primary</button> <button class="clear button secondary" href="#">Secondary</button> <button class="clear button success" href="#">Success</button> <button class="clear button alert" href="#">Alert</button> <button class="clear button warning" href="#">Warning</button> <button class="clear button" href="#" disabled="">Disabled</button>

<h2>White</h2>
<p>If buttons are not white, then you need to add \'white\' to the $foundation-palette map.</p>
<p style="background-color:#333; padding:1em;">
	<a class="button white" href="#">White</a> <a class="button white hollow" href="#">White Hollow</a> <a class="button white clear" href="#">White Clear</a>
</p>

<h2>Pagination</h2>
<nav aria-label="Pagination">
	<ul class="pagination">
		<li class="pagination-previous disabled">Previous <span class="show-for-sr">page</span></li>
		<li class="current"><span class="show-for-sr">You\'re on page</span> 1</li>
		<li><a href="#" aria-label="Page 2">2</a></li>
		<li><a href="#" aria-label="Page 3">3</a></li>
		<li><a href="#" aria-label="Page 4">4</a></li>
		<li class="ellipsis" aria-hidden="true"></li>
		<li><a href="#" aria-label="Page 12">12</a></li>
		<li><a href="#" aria-label="Page 13">13</a></li>
		<li class="pagination-next"><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
	</ul>
</nav>

	';

	$post_details = array(
		'post_title'   => 'Foundation Sink',
		'post_content' => $post_content,
		'post_status'  => 'publish',
		'post_type'    => 'page',
	);
	wp_insert_post( $post_details );
}
