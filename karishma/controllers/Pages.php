<?php
Class Pages extends Controller {
  public function __construct() {}

  public function main() {
    $this->description = "Karishma Chera online content creator Vancouver BC comedy interview humour";
    $this->pageTitle = "Home | Karishma Chera";

    $this->featured = Media::getFeature();
    $this->mainBody .= $this->renderView("home");

    $this->phone = Info::getInfo("1");
    $this->email = Info::getInfo("2");
    $this->twitter = Info::getInfo("3");
    $this->youtube = Info::getInfo("4");
    include("views/template.php");
  }

  public function about() {
    $this->description = "Karishma Chera online content creator Vancouver BC comedy interview humour";
    $this->pageTitle = "About | Karishma Chera";

    $this->section = Section::get("1");
    $this->mainBody .= $this->renderView("about");

    $this->phone = Info::getInfo("1");
    $this->email = Info::getInfo("2");
    $this->twitter = Info::getInfo("3");
    $this->youtube = Info::getInfo("4");
    include("views/template.php");
  }

  public function media() {
    $this->description = "Karishma Chera online content creator Vancouver BC comedy interview humour";
    $this->pageTitle = "Media | Karishma Chera";

    $this->video = Media::getVideos();
    $this->podcast = Media::getPodcasts();
    $this->mainBody .= $this->renderView("media");

    $this->phone = Info::getInfo("1");
    $this->email = Info::getInfo("2");
    $this->twitter = Info::getInfo("3");
    $this->youtube = Info::getInfo("4");
    include("views/template.php");
  }

  public function experience() {
    $this->description = "Karishma Chera online content creator Vancouver BC comedy interview humour";
    $this->pageTitle = "Experience | Karishma Chera";

    $this->skills = Section::get("2");
    $this->tech = Section::get("3");
    $this->accomplish = Section::get("4");
    $this->mainBody .= $this->renderView("experience");

    $this->phone = Info::getInfo("1");
    $this->email = Info::getInfo("2");
    $this->twitter = Info::getInfo("3");
    $this->youtube = Info::getInfo("4");
    include("views/template.php");
  }

  public function contact() {
    $this->description = "Karishma Chera online content creator Vancouver BC comedy interview humour";
    $this->pageTitle = "Contact | Karishma Chera";

    $this->mainBody .= $this->renderView("contact");

    $this->phone = Info::getInfo("1");
    $this->email = Info::getInfo("2");
    $this->twitter = Info::getInfo("3");
    $this->youtube = Info::getInfo("4");
    include("views/template.php");
  }

  public function sendMessage() {
    Message::send();
  }

  public function blog() {
    $this->description = "Karishma Chera online content creator Vancouver BC comedy interview humour";
    $this->pageTitle = "Blog | Karishma Chera";

    $this->blog = Media::getBlogs();
    $this->mainBody .= $this->renderView("blog");

    $this->phone = Info::getInfo("1");
    $this->email = Info::getInfo("2");
    $this->twitter = Info::getInfo("3");
    $this->youtube = Info::getInfo("4");
    include("views/template.php");
  }

  public function post() {
    $this->description = "Karishma Chera online content creator Vancouver BC comedy interview humour";
    $this->pageTitle = "Post | Karishma Chera";

    $this->blog = Content::getBlog($_GET["contentId"]);
    $this->mainBody .= $this->renderView("post");

    $this->phone = Info::getInfo("1");
    $this->email = Info::getInfo("2");
    $this->twitter = Info::getInfo("3");
    $this->youtube = Info::getInfo("4");
    include("views/template.php");
  }
}
?>