// Replace 'path/to/your/resume.pdf' with the actual path to your resume PDF file
const resumePDF = 'Resume Gopal Vishwakarma.pdf';

document.getElementById('downloadButton').addEventListener('click', () => {
    // Create a temporary anchor element to trigger the download
    const link = document.createElement('a');
    link.href = resumePDF;
    link.target = '_blank'; // Open in a new tab (optional)
    link.download = 'My_Resume.pdf'; // Change the file name if needed
    link.click();

    // Remove the temporary anchor element
    link.remove();
});

