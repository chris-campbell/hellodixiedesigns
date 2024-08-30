/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "../../hellodixiedesigns/frontend/**/*.ts",
    "../../hellodixiedesigns/**/*.php",
    "../**/*.php",
  ],
  theme: {
    extend: {
      inset: {
        94: "94%",
      },
      screens: {
        xs: "482px",
        sm: "640px",
        md: "768px",
        "md-2": "940px",
        lg: "1024px",
        "lg-2": "1080px",
        "lg-3": "1193px",
        xl: "1280px",
        "2xl": "1536px",
        "max-600": { max: "600px" },
        "max-768": { max: "768px" },
        "max-1080": { max: "1080px" },
      },
      fontSize: {
        sm: [
          "1.25rem",
          {
            lineHeight: "1.75rem",
          },
        ],
        md: [
          "1.5rem",
          {
            lineHeight: "2rem",
          },
        ],
        lg: [
          "1.875rem",
          {
            lineHeight: "2rem",
          },
        ],
        xl: [
          "3rem",
          {
            lineHeight: "3.313rem",
          },
        ],
      },
      fontFamily: {
        "aglet-sans": ["aglet-sans", "sans-serif"],
        "chivo-bold": ["chivo-bold", "sans-serif"],
        "chivo-bold-italic": ["chivo-bold-italic", "sans-serif"],
        chivo: ["chivo", "sans-serif"],
      },
      borderWidth: {
        3: "3px",
      },
      maxWidth: {
        320: "80rem",
        200: "50rem",
        148: "37rem",
        140: "35rem",
        120: "30rem",
        113: "28.25rem",
        100: "25rem",
        88: "22rem",
        72: "18rem",
        62: "15.5rem",
        52: "13rem",
      },
      spacing: {
        55: "1.375rem",
        40: "10rem",
        48: "12rem",
        12: "3rem",
        15: "3.94rem",
        75: "1.88rem",
        77: "1.94rem",
        20: "5rem",
      },
      borderRadius: {
        3: "3rem",
      },
      colors: {
        "dixie-black": "#131313",
        "dixie-green": "#192D1E",
        "dixie-pine": "#5F8962",
        "dixie-royal": "#3F61AC",
        "dixie-mint": "#CBD2CD",
      },
    },
  },
  plugins: [],
};
