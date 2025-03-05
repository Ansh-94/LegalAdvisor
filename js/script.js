const generateBotResponse = async (incomingMessageDiv) => {
  const messageElement = incomingMessageDiv.querySelector(".text-box");

  // Modify user query to be India-specific
  const indiaSpecificQuery = `Provide information related to "${userData.message}" with a focus on India, Indian law, Indian government regulations,Indian Police,Indian Culture,Indian Constitution and relevant Indian data.`;

  // Add user message to chat history
  chatHistory.push({
    role: "user",
    parts: [{ text: indiaSpecificQuery }], // Ensure query is India-specific
  });

  // API request options
  const requestOptions = {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      contents: chatHistory,
    }),
  };

  try {
    // Fetch bot response from API
    const response = await fetch(API_URL, requestOptions);
    const data = await response.json();
    if (!response.ok) throw new Error(data.error.message);

    // Extract and display bot's response text
    const apiResponseText = data.candidates[0].content.parts[0].text
      .replace(/\*\*(.*?)\*\*/g, "$1")
      .trim();
    messageElement.innerText = apiResponseText;

    // Add bot response to chat history
    chatHistory.push({
      role: "model",
      parts: [{ text: apiResponseText }],
    });
  } catch (error) {
    // Handle error in API response
    console.log(error);
    messageElement.innerText = "An error occurred while fetching India-specific data.";
    messageElement.style.color = "#ff0000";
  } finally {
    incomingMessageDiv.classList.remove("thinking");
    chatBody.scrollTo({ top: chatBody.scrollHeight, behavior: "smooth" });
  }
};
