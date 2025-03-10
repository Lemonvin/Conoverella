function openSidebar(choice) {
        if(choice==='hamburg'){
            let sidebar = document.getElementById('sidebar');
            sidebar.style.display = 'block'; 
            setTimeout(function() {
                sidebar.classList.add('open');
                sidebar.classList.remove('close');
            }, 10);
        }
        else if(choice==='cart'){
            let cart = document.getElementById('cart')
            cart.style.display ='block';
            setTimeout(function() {
                cart.classList.add('open');
                cart.classList.remove('close');
            }, 10);
        }
            
    }
    function closeSidebar(choice){
        if (choice==='hamburg'){
            let sidebar = document.getElementById('sidebar');
            sidebar.classList.add('close');
            setTimeout(function() {
                sidebar.style.display = 'none';
            }, 750);
        }
        else if(choice==='cart'){
            let cart = document.getElementById('cart');
            cart.classList.add('close');
            setTimeout(function() {
                cart.style.display = 'none';
            }, 750);
        }
    }
    
