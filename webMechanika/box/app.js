
document.querySelector('[type=button]').addEventListener('click', () => {

    const count = document.querySelector('#count').value;

    // kreipimasis i faila
    axios.post(uriPath + 'api/create/', {
            count: count
        })
        .then(function(response) {
            console.log(response.data.page);
            document.querySelector('#list').innerHTML = response.data.page;
        })
        .catch(function(error) {
            console.log(error);
        });

    console.log('klik')
})
