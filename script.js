document.addEventListener('DOMContentLoaded', () => {
    // --- Button Interactivity ---
    const buttons = document.querySelectorAll('.toggles button, .filters button');

    buttons.forEach(button => {
        button.addEventListener('click', (event) => {
            const buttonText = event.target.textContent;
            const metricContainer = event.target.closest('.metric-container');
            const section = event.target.closest('.dashboard-section');
            const sectionId = section ? section.id : 'unknown section';
            
            console.log(`Button "${buttonText}" clicked in metric "${metricContainer ? metricContainer.querySelector('h3').textContent.trim() : 'N/A'}" (Section: ${sectionId})`);

            // Optional: Toggle 'active' class for buttons within the same parent .toggles div
            const parentToggles = event.target.closest('.toggles');
            if (parentToggles) {
                const siblingButtons = parentToggles.querySelectorAll('button');
                siblingButtons.forEach(btn => btn.classList.remove('active'));
                event.target.classList.add('active');
                console.log(`Button "${buttonText}" set to active.`);
            }
        });
    });

    // --- Select Interactivity ---
    const selects = document.querySelectorAll('.filters select');

    selects.forEach(select => {
        select.addEventListener('change', (event) => {
            const selectedValue = event.target.value;
            const selectId = event.target.id || 'unknown select';
            const section = event.target.closest('.dashboard-section');
            const sectionId = section ? section.id : 'unknown section';

            console.log(`Select "${selectId}" changed to "${selectedValue}" (Section: ${sectionId})`);
        });
    });

    // Set default active button for existing toggle groups if not already set by HTML
    const toggleGroups = document.querySelectorAll('.toggles');
    toggleGroups.forEach(group => {
        const activeButton = group.querySelector('button.active');
        if (!activeButton && group.querySelector('button')) {
            group.querySelector('button').classList.add('active');
        }
    });
});
