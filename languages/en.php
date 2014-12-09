<?php
function lang($phrase){
    static $lang = array(
	
		//header
        'title' => 'Bookhook',
		
		// menu
        'home' => 'Home',
		'register' => 'Register now',
		'contact' => 'Contact us',
		'login' => 'Login',
		'download' => 'Download', 
		
		// menu-loggedin
		'logout' => 'Log out', 
		'sell' => 'Sell',
		'buy' => 'Buy',
		
		//login
		'newuser' => 'Are you new here?',
		'login-header' => 'Login',
		'login-username' => 'Username',
		'login-password' => 'Password',
		'login-submit' => 'Login',
		'login-register' => 'Register now',
	
		//index
		'number-one' => '1. Registrer now',
		'number-one-text' => 'Registration takes under one minute. We only need some information about you.',
		'number-two' => '2. Add books',
		'number-two-text' => 'You can sell books in Kristiansand and Grimstad.',
		'number-three' => '3. Sold!',
		'number-three-text' => 'Its very simple to sell your books.',
		'eyecatcher' => 'Sell or buy books easily with bookhook.net now!',
		
		// register
		'register-header' => 'Register now',
		'username' => 'Username',
		'desc-username' => 'Type in username',
		'email' => 'Email',
		'desc-email' => 'Use a real email',
		'password' => 'Password',
		'desc-password' => 'Must containt numbers and letters',
		'confirmpwd' => 'Confirm password',
		'desc-confirmpwd' => 'Confirm your password.',
		'confirm-register' => 'Register',
		'code' => 'Type in the code above',
		'already-user' => 'Do you already have a user? Login',
		'here' => 'HERE.',
		

		// home (me)
		'mypage' => 'My page',
		'your-acc' => 'Account Information',
		'userid' => 'UserID',
		'me-username' => 'Username',
		'me-email' => 'Email',
		'me-password' => 'Password: encrypted',
		'me-accountsettings' => 'Change account settings »',
		'me-homearea-title' => 'Welcome to your home area!',
		'me-homearea-desc' => 'Here you can sell and buy books from other students at the University of Agder.',
		'me-wanttosell' => 'Want to sell a book?',
		'me-wanttosell-desc' => 'If you want to sell one or more books, you can click on the add a book button. Then you follow instructions to add the book. When you have done this, your book will be listed on the right side on your home area.',
		'me-find' => 'Find a book?',
		'me-find-desc' => 'If you trying to find a book for your courses, your should click on the find books button. Here will you will be avaiable to search for the name of the book, author and ISBN number. If you find a book your interested in, you should contact the seller.',
		'me-mybooks' => 'My books',
		'me-mybooks-desc' => 'Here is an overview over your added books. Click on them to change status or tittel/author.',
		'me-booktitle' => 'Book title',
		'me-author' => 'Author',
		'me-price' => 'Price',
		'me-status' => 'Status',
	
		// footer
		'contact-us' => 'Contact us',
		'rights' => 'All rights © 2014 |',
		'terms' => 'Terms of Use',
		'privacy' => 'Privacy',
		
		//contact form
		'contact-header' => 'Contact us',
		'firstname' => 'Firstname',
		
		//search books
		'search-books' => 'Search for books', 
		'search-books-found' => 'About {0} books found',
		'search-books-seconds'	=> '({0} seconds)',	
		'search-latest' => 'Latest books added',
		'search-value' => 'Search for author, book title or ISBN number..',
    );
    return $lang[$phrase];
}