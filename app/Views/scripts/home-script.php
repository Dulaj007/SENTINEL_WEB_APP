<script>
    document.addEventListener('DOMContentLoaded', () => {
  const section = document.getElementById('getStarted');
  const steps = section.querySelectorAll('.step');
  const totalSteps = steps.length;

  function updateStepOnScroll() {
    const scrollY = window.scrollY || window.pageYOffset;
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;
    const viewportHeight = window.innerHeight;

    // Calculate how far the user has scrolled inside the sticky section
    const scrollRelative = scrollY - sectionTop;

    if (scrollRelative < 0) {
      // Above the section: Show step 1 only
      showStep(0);
    } else if (scrollRelative >= sectionHeight - viewportHeight) {
      // Below the sticky section: Show last step
      showStep(totalSteps - 1);
    } else {
      // Inside the sticky section, divide height into steps
      const stepHeight = (sectionHeight - viewportHeight) / (totalSteps - 1);
      const currentStep = Math.min(totalSteps - 1, Math.floor(scrollRelative / stepHeight));
      showStep(currentStep);
    }
  }

  function showStep(stepIndex) {
    steps.forEach((step, index) => {
      if (index === stepIndex) {
        step.style.opacity = '1';
        step.style.pointerEvents = 'auto';
      } else {
        step.style.opacity = '0';
        step.style.pointerEvents = 'none';
      }
    });
  }

  // Initialize showing the first step
  showStep(0);

  // Attach scroll event to window
  window.addEventListener('scroll', updateStepOnScroll);
});
</script>