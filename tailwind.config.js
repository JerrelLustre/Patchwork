/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        white: "#ffffff",
        black: "#333333",
        offBlack: "#444444",
        red: "#E6AA99",
        brightRed: "#F5E0E1",
        darkBrown: "#1F1715",
        green: "#8DA595",
        gray: "#B6B6B6",
        blue: "#7C95AA",
        offWhite: "#EDE9D5",
        noticeColor: "#4D6880",
        noticeColorlight: " hsl(208.2, 24.9%, 80.2%) ",
        // bgcolor is the same name as the course column value
        internshipTagColor: "#2b9985",
        internshipPrepBgColor: "#31c9ad",
        qaTagColor: "#e76c6c",
        qualityAssuranceBgColor: "#eda0a0",
        webscriptTagColor: "#b9a91a",
        webScripting3BgColor: "#dccb35",
        appDevTagColor: "#ad8ce5",
        appDev2BgColor: "#eab631",
        portfolio2TagColor: "#b99822",
        careerTagColor: "#de6dc5",
        enterpriseBgColor: "#7aadda",
        nmOperationBgColor: "#db8b74",
        onlineStoreTagColor: "#4f9362",
        careerPrepBgColor: "#f59ae1",
        operationTagColor: "#df6643",
        onlineStoreBgColor: "#72ca8a",
        enterpriseBgColor: "#ceb1fe",
        enterpriseTagColor: "#528aba",
        menuButtonColor1: "#8792ef",
        menuButtonColor2: "#aeb6f8",
        menuButtonColor3: "#e0e3ff",
        menuButtonColor4: "#F6F7FF",
        menuButtonColorTop: "#5e6ce2",
        menuButtonColorButton: "#b1b9ff",
      },
      borderRadius: {
        "4xl": " 35px",
        "3xl": " 1.125rem",
      },
      dropShadow: {
        md: "4px 4px 6px rgba(100, 100, 100, 0.25)",
        card: "4px 4px 4px 1px rgba(129, 129, 129, 0.25)" 
      },
      boxShadow:{
        btn: "0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
      },
      fontFamily: {
        pop: ["Poppins"],
        deca: ["Lexend Deca"],
      },
    },
  },
};
