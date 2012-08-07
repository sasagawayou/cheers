<?php

class voteActions extends sfActions {

  public function executeIndex(sfWebRequest $request) {

//    function getPageTitle($idurl) {
// //     if (!enpty($idurl)){
//      $html = file_get_contents($idurl);
//      $html = mb_convert_encoding($html, mb_internal_encoding(), "auto");
//      if (preg_match("/<title>(.*?)<\/title>/i", $html, $matches)) {
//        return $matches[1];
//      } else {
//        return false;
//      }
////        return false;
////      }
//    }
//
//    function insertUrl($val) {
//      $vote_shop = new Vote_shop();
//      $vote_shop->setUrl($val);
//      $vote_shop->save();
//      return $val = "";
//    }
//    
//    function insertVote($val, $id) {
//      $vote_shop = Vote_shopTable::getInstance()->findOneBy("id","$id");
//      $vote_shop->setVotes($val);
//      $vote_shop->save();
//      return $val = "";
//    }
//
//    function countGet() {
//      $count = Doctrine_Query::create()
//              ->from('Vote_shop v')
//              ->select('v.url');
//      $count = $count->count();
//      return $count;
//    }
//
//    function idGet() {
//      $ids = Vote_shopTable::getInstance()->findAll();
////     foreach ($ids as $id){
////        $ids[] = $id->getId();
////      }
//      return $ids;
//    }
//
//    function getRecord($id) {
//      $idurl = Vote_shopTable::getInstance()->findOneBy("id","$id");
////      $idurl = $idurl->getUrl();
//      return $idurl;
//    }
//
//    function idUrlDelete($id) {
//      $id = Vote_shopTable::getInstance()->findOneBy('id', $id);
//      $id->delete();
//      $id = "";
//      return $id;
//    }

  }

}

