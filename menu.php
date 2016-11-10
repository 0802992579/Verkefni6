<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>      
<nav class="efri">
	   <ul>
		<li><a href="#">&nbsp;</a></li>
            	<li><a href="index.php" 
            		<?php if ($currentPage == 'index.php') {echo 'id="here"';} ?>>Home</a>
            	</li>
            	<li><a href="test.php"
            		<?php if ($currentPage == 'test.php') {echo 'id="here"';} ?>>Testimonials</a>
            	</li>
            	<li><a href="order.php"
            		<?php if ($currentPage == 'order.php') {echo 'id="here"';} ?>>Order</a>
            	</li>
            	<li><a href="contact.php"
            		<?php if ($currentPage == 'contact.php') {echo 'id="here"';} ?>>Contact</a>
            	</li>
		<li><a href="#">&nbsp;</a></li>
	   </ul>
</nav>