$('#submit-survey-btn').on('click', function(event) {
    event.preventDefault();

    let treatmentTime = $('#time-input').val();
    let painB = $('input:radio[name=painScaleBefore]:checked').data('value');
    let painD = $('input:radio[name=painScaleDuring]:checked').data('value');
    let painA = $('input:radio[name=painScaleAfter]:checked').data('value');

    console.log('time: ', treatmentTime);
    console.log('pain before:', painB);
    console.log('pain during:', painD);
    console.log('pain after:', painA);
})