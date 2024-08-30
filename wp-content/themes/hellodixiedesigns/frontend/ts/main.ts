(function (global) {
  // Toggle navigation visibility
  function toggle() {
    const navToggle: Element | null = document.querySelector(
      '[data-id="nav-toggle"]'
    );
    const navMobile: Element | null = document.querySelector(
      '[data-id="nav-mobile"]'
    );
    const maxWidth = 600;

    if (navToggle) {
      if (navToggle.classList.contains("hidden")) {
        navToggle.classList.remove("hidden");
        if (window.innerWidth <= maxWidth) {
          navMobile.classList.add("mb-8");
        }
      } else {
        navToggle.classList.add("hidden");
        navMobile.classList.remove("mb-8");
      }
    }
  }

  global.toggle = toggle;
})(window);

// Embed YouTube videos replacing the placeholder
document.addEventListener("DOMContentLoaded", function () {
  document
    .querySelectorAll(".wp-block-embed__wrapper")
    .forEach(function (wrapper) {
      const url = wrapper.innerText.trim();
      const match = url.match(
        /https:\/\/www\.youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/
      );
      if (match) {
        const videoId = match[1];
        const iframe = document.createElement("iframe");
        iframe.src = "https://www.youtube.com/embed/" + videoId;
        iframe.frameBorder = "0";
        iframe.allow =
          "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share";
        iframe.allowFullscreen = true;
        iframe.style.width = "100%";
        iframe.style.height = "100%";
        iframe.style.position = "absolute";
        iframe.style.top = "0";
        iframe.style.left = "0";

        const container = document.createElement("div");
        container.className = "video-container";
        container.style.position = "relative";
        container.style.paddingBottom = "56.25%"; // 16:9 aspect ratio
        container.style.height = "0";
        container.style.overflow = "hidden";
        container.style.marginBottom = "1.5rem";
        container.style.borderRadius = "1.5rem";
        container.style.border = "3px solid black";

        container.appendChild(iframe);
        wrapper.parentElement.replaceWith(container);
      }
    });
});

document.addEventListener("DOMContentLoaded", function () {
  // Target only li elements that are direct children of ul elements
  document.querySelectorAll("ul > li").forEach(function (li) {
    // Create a new div element that will wrap all content of the li
    const wrapperDiv = document.createElement("div");

    // While the li has child nodes, append them to the wrapperDiv
    while (li.firstChild) {
      wrapperDiv.appendChild(li.firstChild);
    }

    li.appendChild(wrapperDiv);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Check if we're on a post page by checking the body class
  const body = document.querySelector("body");
  if (body && body.classList.contains("single-post")) {
    // Apply styles to social buttons
    const socialButtons = document.querySelectorAll(
      'div[class*="simplesocialbuttons-float"].simplesocialbuttons.simplesocial-round-icon button'
    );

    socialButtons.forEach((button) => {
      (button as HTMLElement).style.backgroundColor = "#CBD2CE";
      (button as HTMLElement).style.borderColor = "#131313";
      (button as HTMLElement).style.color = "#131313";
      (button as HTMLElement).style.fontSize = "0.6rem";
    });

    // Apply styles to the floating social button container
    const floatLeftCenter = document.querySelector(
      "div.simplesocialbuttons.simplesocialbuttons-float-left-center"
    );

    if (floatLeftCenter) {
      (floatLeftCenter as HTMLElement).style.left = "8px";
    }
  }
});
