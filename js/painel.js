const panels = document.querySelectorAll('.painel')

panels.forEach(panel => {
    panel.addEventListener('click', () => {
        removeActionClasses()
        panel.classList.add('active')
    })
})

function removeActionClasses() {
    panels.forEach(panel => {
        panel.classList.remove('active')
    })
}