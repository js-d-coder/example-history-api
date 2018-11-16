$(document).ready(function() {
    const path = window.location.pathname;
    switch(path) {
        case '/holmes':
        case '/watson':
        case '/moriarty':
            getAndSetDetails(path);
            setActiveImage(path);
            document.title = 'Heroes | ' + path.substring(1);
    }

    $('.gallery a').click(function(event) {
            event.preventDefault();
            const path = event.currentTarget.getAttribute('href');
            getAndSetDetails(path);
            setActiveImage(path);
            history.pushState(path, null, path);
    });
});

window.addEventListener('popstate', function(event){
    const path = event.state;
    if(path !== null) {
        switch(path) {
            case '/holmes':
            case '/watson':
            case '/moriarty':
                getAndSetDetails(path);
                setActiveImage(path);
                document.title = 'Heroes | ' + path.substring(1);
        }
    }
});

function getAndSetDetails(path) {
    $.ajax({
        method: 'GET',
        data: {title: path.substring(1)},
        url: 'api.php',
    }).done(function(res) {
        const details = res;
        $('.title').text(details.title);
        $('.desc').text(details.desc);
    });
}

function setActiveImage(path) {
    $('.gallery a').removeClass('active');
    $('a[href="' + path + '"]').addClass('active');
}
