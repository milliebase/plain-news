// Gets all like buttons and loops through them so each button
// gets an eventlistener which increments amount of likes on each click.

document.querySelectorAll('.likeBtn').forEach(item => {
  item.addEventListener('click', event => {
    let likes = item.querySelector('span').textContent;
    likes++;

    return item.querySelector('span').textContent = likes;
  })
});
