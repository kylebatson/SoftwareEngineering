function query_() {
    fetch('http://localhost:8000/catalog', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: {
            "fname": "deron",
            "sname": "worrell"
        }
    }).then(response => {
        console.log(response.json());
    })
}