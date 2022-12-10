$(function() {

    axios.defaults.headers.common['Content-Type'] = 'application/json';

    $('#delivery-form').on('submit', function(event) {
        event.preventDefault();
        event.stopPropagation();

        const data = new FormData(event.currentTarget);

        const flushMessages  = () => $('.error, .success').html('');
        const displayError   = (text) => $('.error').html(text);
        const displaySuccess = (text) => $('.success').html(text);

        axios.post('/backend/app/public/index.php', data)
            .then(res => {
                const data = res.data;
                flushMessages();
                if ( data.error ) {
                    displayError( data.error );
                    return;
                }

                console.log(data);

                displaySuccess( `Цена: ${data.price} <br><br> Дата: ${data.date}` );
            })
            .catch(err => console.log('err: ', err));
    });
});