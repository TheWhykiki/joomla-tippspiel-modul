
document.addEventListener('DOMContentLoaded', function () {

    const buttonSubmitResults = document.querySelector("#btnFormSubmitResults");

    // Event-Listener für das Mousewheel-Ereignis hinzufügen
    document.querySelector('.score-input').addEventListener('wheel', disableMouseWheel);


    // Benutzertipps beim Laden des Dokuments abrufen
    loadUserTipps();


    document.getElementById('tippspiel-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const results = collectFormData();
        sendAjaxRequest('writeTipps', results);
    });

    if(buttonSubmitResults)
    {

        document.querySelectorAll('.match').forEach(matchElement => {
            matchElement.addEventListener('click', function() {
                const matchID = this.getAttribute('data-matchid');
                document.querySelector('input[name="currentMatchId"]').value = matchID;
            });
        });

        buttonSubmitResults.addEventListener('click', function (e) {
            e.preventDefault();
            const results = collectFormData();
            const currentMatchId = document.querySelector('input[name="currentMatchId"]').value;
            sendAjaxRequest('writeResults', [results, currentMatchId]);
        });


    }


});

// Funktion zum Abrufen und Einfügen der Benutzertipps
function loadUserTipps() {
    const request = new XMLHttpRequest();
    const token = Joomla.getOptions('csrf.token');

    request.open('GET', 'index.php?option=com_ajax&module=tippspiel_form&method=getResults&format=json&${token}=1', true);
    request.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
            const response = JSON.parse(request.responseText);
            if (response.data.success) {
                const results = JSON.parse(response.data.data);
                results.forEach(result => {
                    const matchId = result.matchid;
                    const score1 = result['score-1'];
                    const score2 = result['score-2'];
                    const team1 = result['team-1'];
                    const team2 = result['team-2'];

                    if (score1) document.querySelector(`input[name="score-${matchId}-1"]`).value = score1;
                    if (score2) document.querySelector(`input[name="score-${matchId}-2"]`).value = score2;
                    if (team1) document.querySelector(`input[name="team-${matchId}-1"]`).value = team1;
                    if (team2) document.querySelector(`input[name="team-${matchId}-2"]`).value = team2;
                });
            }
        }
    };
    request.send();
}

function disableMouseWheel(event) {
    if (document.activeElement.type === 'number') {
        document.activeElement.blur();
    }
    event.preventDefault();
}

function collectFormData() {
    const matches = document.querySelectorAll('.match');
    const results = [];

    matches.forEach(match => {
        const matchId = match.getAttribute('data-matchid');
        const score1 = match.querySelector(`input[name="score-${matchId}-1"]`).value;
        const score2 = match.querySelector(`input[name="score-${matchId}-2"]`).value;
        const team1Input = match.querySelector(`input[name="team-${matchId}-1"]`);
        const team1 = team1Input ? team1Input.value : null;
        const team2Input = match.querySelector(`input[name="team-${matchId}-2"]`);
        const team2 = team2Input ? team2Input.value : null;

        const result = {
            matchid: matchId,
            'score-1': score1,
            'score-2': score2
        };

        if (team1) result['team-1'] = team1;
        if (team2) result['team-2'] = team2;

        results.push(result);
    });

    return results;
}

function sendAjaxRequest(method, results) {
    const request = new XMLHttpRequest();
    const token = Joomla.getOptions('csrf.token');

    request.open('POST', `index.php?option=com_ajax&module=tippspiel_form&method=${method}&format=json&${token}=1`, true);
    request.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
            const response = JSON.parse(request.responseText);
            alert(response.data.message);
        }
    };
    request.send(JSON.stringify({ results: results }));
}
