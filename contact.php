<?php include('include/header.php'); ?>
<div id="contact-wrapper">
  <div id="contact-div">
    <div class="contact-box">
      <label>Name</label>
      <input type="text" class="contact-input" placeholder="..." />
      <label>Email address</label>
      <input type="text" class="contact-input" placeholder="..." />
    </div>
    <div class="contact-box">
      <label>Subject</label>
      <input type="text" class="contact-input" placeholder="..." />
      <label>Reason</label>
      <div id="contact-select-div">
        <select id="contact-reason">
          <option value="default" selected="selected">---</option>
          <option value="jff">Just for fun</option>
          <option value="rab">Reporting a bug</option>
          <option value="br">Bussiness reasons</option>
        </select>
      </div>
    </div>
    <label>Message</label>
    <textarea id="contact-msg" placeholder="..."></textarea>
    <button id="contact-btn">Submit</button>
  </div>
</div>
<?php include('include/footer.php'); ?>
