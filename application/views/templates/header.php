<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Study</title>
	<style type="text/css">
/* Variables */

:root {
  --main-background-color: #001847;
  --main-text-color: #fff;
  --button-background: #4685ff;
  --steps-background: #397cff;
}

/* Basic Utilities */

html,
body {
  margin: 0;
  padding: 0;
  background-color: var(--main-background-color);
  color: var(--main-text-color);
  font-family: "Poppins", sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6,
p {
  margin: 0;
}

/* Typography */

h1 {
  font-size: 2.5rem;
  font-weight: 700;
}

p {
  font-size: 1.25rem;
  font-weight: 400;
  line-height: 1.5rem;
}

main {
  display: flex;
  align-items: center;
  flex-direction: column;
  margin: 0.625rem;
}

header {
  display: flex;
  align-items: center;
  gap: 0.625rem;
  margin-top: 4rem;
  margin-bottom: 1.875rem;
  transition: all 0.2s;
}

section {
  width: 100%;
  text-align: center;
  margin-top: 2.75rem;
}

button {
  background-color: var(--button-background);
  color: var(--main-text-color);
  border: none;
  padding: 1.25rem;
  width: 100%;
  max-width: 343px;
  font-size: 1rem;
  border-radius: 0.25rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.2s;
}
button:hover {
  background-color: #1764fd;
}
.steps {
  display: flex;
  justify-content: space-between;
  width: 500px;
  position: relative;
  transition: all 0.2s;
}

.steps::before {
  content: "";
  content: "";
  position: absolute;
  height: 2px;
  background: var(--steps-background);
  width: 100%;
  z-index: 0;
  top: 50%;
}

.step {
  background-color: var(--steps-background);
  width: 1.25rem;
  height: 1.25rem;
  border-radius: 50%;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.step::before {
  content: "";
  background-color: var(--main-text-color);
  width: 0.625rem;
  height: 0.625rem;
  border-radius: 50%;
  position: relative;
  z-index: 2;
  display: inline-block;
}

.step.active::before {
  content: "";
  position: absolute;
  background: url(./images//checkmark.svg) center no-repeat;
  border: none;
  width: 0.625rem;
  height: 0.625rem;
  left: 50%;
  top: 50%;
  transform: translate3d(-50%, -50%, 0);
}

.slider {
  margin: 4.1rem auto 0;
  max-width: 343px;
}

.slider-bullets {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  margin-bottom: 1rem;
}

.bullet {
  width: 0.5rem;
  height: 0.5rem;
  border-radius: 50%;
  background-color: var(--main-text-color);
  cursor: pointer;
}

.bullet.fill {
  background-color: var(--button-background);
}

.dropbtn {
  background-color: transparent;
  color: var(--main-text-color);
  border-radius: 0.5rem;
  padding: 0.75rem 1.625rem;
  font-size: 1.25rem;
  line-height: 1.875rem;
  border: none;
  cursor: pointer;
  transition: all 0.2s;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.dropbtn span {
  width: 80%;
  display: inline-block;
}

.dropbtn:hover {
  background-color: var(--button-background);
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-bottom: 4.1rem;
  border: 1px solid var(--main-text-color);
  border-radius: 0.5rem;
  width: 100%;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: var(--main-background-color);
  border: 1px solid var(--main-text-color);
  min-width: 100%;
  z-index: 1;
}

.dropdown-content a {
  color: var(--main-text-color);
  padding: 0.75rem 1rem;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: var(--main-text-color);
  color: var(--main-background-color);
}

.slide {
  display: none;
}

.show {
  display: block;
}

#arrow {
  transition: all 0.2s;
}

.rotate {
  transform: rotate(180deg);
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {
    opacity: 0.2;
  }
  to {
    opacity: 1;
  }
}

/* Responsive Styles */

@media screen and (width <= 768px) {
  h1 {
    font-size: 2.25rem;
  }
  header {
    align-self: flex-start;
  }
  header img {
    width: 50%;
  }
  header h2 {
    font-size: 12px;
  }
  button,
  .slider {
    max-width: 100%;
  }
  .steps {
    width: 100%;
  }
}

	</style>
</head>
<body>
  