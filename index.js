const nav = document.createElement("nav");
const ul = document.createElement("ul");

const items = ["Home", "Contact", "About"];

for (let x = 0; x < items.length; x++) {
  const li = document.createElement("li");
  li.textContent = items[x];
  ul.append(li);
}
nav.append(ul);
nav.classList.add("nav-list");
document.body.append(nav);
