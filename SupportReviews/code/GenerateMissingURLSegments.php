<?php
class GenerateMissingURLSegments extends BuildTask {
    public $title = "Add URL Segments to SupportReview";
    public $description = "Generate URL Segments for For SupportReview";

    public function run($request) {
        $recs = DB::query("SELECT ID,TITLE,URLSegment FROM SupportReview");
        while($rec = $recs->nextRecord()) {
           if (!empty($rec['Title'])) {
               $usegment = URLPageDecorator::generateURLSegment($rec['Title']);
               DB::query("Update SupportReview set URLSegment = '".Convert::raw2sql($usegment)."' where ID = ".$rec['ID']);
           }
  
       }
    }
}
