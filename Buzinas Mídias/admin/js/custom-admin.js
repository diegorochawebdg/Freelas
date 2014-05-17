( function( $ ){
    // BLOG NAME & DESCRIPTION    
    wp.customize( 'blogname', function( value ) {
        value.bind( function( to ) {
            $( '#site-title a' ).html( to );
        } );
    } );
    wp.customize( 'blogdescription', function( value ) {
        value.bind( function( to ) {
            $( '#site-description' ).html( to );
        } );
    } );
        
    // COLORS        
    wp.customize('body_color',function( value ) {
        value.bind(function(to) {
            $('body').css('color', to ? to : '' );
        });
    });   
        
    wp.customize('menu_background_color',function( value ) {
        value.bind(function(to) {
            $('.main-menu nav').css('background-color', to ? to : '' );
        });
    });    
        
    wp.customize('menu_color',function( value ) {
        value.bind(function(to) {
            $('.main-menu nav a').css('color', to ? to : '' );
        });
    });       
     
    wp.customize('manu_active_page',function( value ) {
        value.bind(function(to) {
            $('div.main-menu nav ul li.active a').css('color', to ? to : '' );
        });
    });
    
    wp.customize('filter_color',function( value ) {
        value.bind(function(to) {
            $('#filter li').css('background-color', to ? to : '' );
        });
    });   
    
    wp.customize('filter_curent',function( value ) {
        value.bind(function(to) {
            $('#filter li.current').css('background-color', to ? to : '' );
        });
    }); 
    
    wp.customize('portfolio_element_background',function( value ) {
        value.bind(function(to) {
            $('#work-items li').css('background-color', to ? to : '' );
        });
    });    
    
    wp.customize('portfolio_element_border',function( value ) {
        value.bind(function(to) {
            $('#work-items li').css('border-color', to ? to : '' );
        });
    }); 
        
    wp.customize('portfolio_element_title',function( value ) {
        value.bind(function(to) {
            $('#work-items li h2 a').css('color', to ? to : '' );
        });
    }); 
    
    wp.customize('team_item_title',function( value ) {
        value.bind(function(to) {
            $('.about-item-holder h2').css('color', to ? to : '' );
        });
    });     
    
    wp.customize('team_item_position',function( value ) {
        value.bind(function(to) {
            $('.about-item-holder .sub-info').css('color', to ? to : '' );
        });
    }); 
    
    wp.customize('blog_title',function( value ) {
        value.bind(function(to) {
            $('#news-items li p.title a').css('color', to ? to : '' );
        });
    });      
    
    wp.customize('blog_date',function( value ) {
        value.bind(function(to) {
            $('#news-items li span.category').css('color', to ? to : '' );
        });
    });  
    
    wp.customize('blog_read_more',function( value ) {
        value.bind(function(to) {
            $('#news-items li a.read-more').css('background-color', to ? to : '' );
        });
    });      
        
    wp.customize('contact_fields',function( value ) {
        value.bind(function(to) {
            $('.contact-form input, .contact-form textarea').css('background-color', to ? to : '' );
        });
    });        
    
    wp.customize('contact_submit',function( value ) {
        value.bind(function(to) {
            $('.contact-form button').css('background-color', to ? to : '' );
        });
    });  
    
    wp.customize('footer_color',function( value ) {
        value.bind(function(to) {
            $('footer').css('color', to ? to : '' );
        });
    });     
        
    wp.customize('footer_background',function( value ) {
        value.bind(function(to) {
            $('footer').css('background-color', to ? to : '' );			
        });
    });
    
    
    
    
    wp.customize('single_body',function( value ) {
        value.bind(function(to) {
            $('article .article-content, .popup-close, .posts-navigation, .comments-holder, .comments-pagination-wrapper, div.pop-up-footer').css('background-color', to ? to : '' );			
        });
    });
    
    wp.customize('single_add_comment_form',function( value ) {
        value.bind(function(to) {
            $('#commentform input#author, #commentform input#email, #commentform textarea').css('background-color', to ? to : '' );			
        });
    });
    wp.customize('single_title',function( value ) {
        value.bind(function(to) {
            $('article .single-h1-title, article .article-content span.category, .comment-separator, .comment-author, .logged-in-as, .comments-holder a, .separator, .comment-date, #commentform input#submit').css('color', to ? to : '' );			
        });
    });
    
    wp.customize('single_separator',function( value ) {
        value.bind(function(to) {
            $('div.pop-up-copyright, .comments-pagination, .comments-holder ol, .no-comments').css('border-color', to ? to : '' );			
        });
    });    
       
    
    //STATIC TEXT    
    wp.customize( 'copyright_text', function( value ) {
        value.bind( function( to ) {
            $( 'footer' ).html( to );
        } );
    } );
    
  
} )( jQuery );