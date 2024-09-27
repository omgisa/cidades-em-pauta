document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('button[data-hint]');
    const hintBox = document.getElementById('hint-box');
  
    buttons.forEach(button => {
        button.addEventListener('mouseover', showHint);
        button.addEventListener('mouseout', hideHint);
    });
  
    function showHint(event) {
        const hint = event.target.getAttribute('data-hint');
        const buttonId = event.target.id;
        
        hintBox.textContent = hint;
        hintBox.style.display = 'block';
        
        // Definir a cor de fundo com base no ID do botão
        if (buttonId === 'button1') {
            hintBox.style.backgroundColor = '#FFD700'; // Amarelo
            hintBox.style.color = '#000000';
        } else if (buttonId === 'button2') {
            hintBox.style.backgroundColor = '#FF0000'; // Vermelho
            hintBox.style.color = '#FFFFFF';
        }
        
        const rect = event.target.getBoundingClientRect();
        hintBox.style.right = (window.innerWidth - rect.left + 10) + 'px';
        hintBox.style.top = rect.top + 'px';
    }
  
    function hideHint() {
        hintBox.style.display = 'none';
    }
  });