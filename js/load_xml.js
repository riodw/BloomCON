$.ajax({
    url: 'bloomconn.xml',
    dataType: 'xml',
    success: function(data){
        // Extract relevant data from XML
        var xml_node = $('bloomcon',data);
        // console.log( xml_node.find('Page[Name="test"] > controls > test').text() );

    // - SET THE CONTENT ----------------
        // DATE
            $( "#Date_Month" ).html( xml_node.find('date > month').text() );
            $( "#Date_Day" ).html( xml_node.find('date > day').text() );
            $( "#Date_Year" ).html( xml_node.find('date > year').text() );
        // ---------------------------------

        // ABOUT
            $( "#About_Title" ).html( xml_node.find('about > title').text() );
            $( "#About_Content" ).html( xml_node.find('about > content').text() );
            // -- COUNTERS
                // First
                $( "#About_First_Title" ).html( xml_node.find('about > counters > first > title').text() );
                $( "#About_First_Number" ).html( xml_node.find('about > counters > first > number').text() );
                // Second
                $( "#About_Second_Title" ).html( xml_node.find('about > counters > second > title').text() );
                $( "#About_Second_Number" ).html( xml_node.find('about > counters > second > number').text() );
                // Third
                $( "#About_Third_Title" ).html( xml_node.find('about > counters > third > title').text() );
                $( "#About_Third_Number" ).html( xml_node.find('about > counters > third > number').text() );
                // Fourth
                $( "#About_Fourth_Title" ).html( xml_node.find('about > counters > fourth > title').text() );
                $( "#About_Fourth_Number" ).html( xml_node.find('about > counters > fourth > number').text() );
        // ---------------------------------

        // EVENTS
            $( "#Events_Title" ).html( xml_node.find('events > title').text() );
            // -- EVENTS
                // First
                $( "#Events_1 div h3" ).html( xml_node.find('events > first > title').text() );
                $( "#Events_1 div p" ).html( xml_node.find('events > first > content').text() );
                    // Modal
                    $( "#Events_1_Modal span" ).html( xml_node.find('events > first > title').text() );
                    $( "#Events_1_Modal div p" ).html( xml_node.find('events > first > content').text() );
                // Second
                $( "#Events_2 div h3" ).html( xml_node.find('events > second > title').text() );
                $( "#Events_2 div p" ).html( xml_node.find('events > second > content').text() );
                    // Modal
                    $( "#Events_2_Modal span" ).html( xml_node.find('events > second > title').text() );
                    $( "#Events_2_Modal div p" ).html( xml_node.find('events > second > content').text() );
                // Third
                $( "#Events_3 div h3" ).html( xml_node.find('events > third > title').text() );
                $( "#Events_3 div p" ).html( xml_node.find('events > third > content').text() );
                    // Modal
                    $( "#Events_3_Modal span" ).html( xml_node.find('events > third > title').text() );
                    $( "#Events_3_Modal div p" ).html( xml_node.find('events > third > content').text() );
        // ---------------------------------

        // SPONSORS
            $( "#Sponsors_Title" ).html( xml_node.find('sponsors > title').text() );
            // -- EMAIL
                $( "#Sponsors_Email_Title" ).html( xml_node.find('sponsors > email_title').text() );
                $( "#Sponsors_Email" ).html( xml_node.find('sponsors > email').text() );

    },
    error: function(data) {
        console.log('YO!! Error loading XML data');
    }
});
// <Pages>
//   <Page Name="test">
//     <controls>
//       <test>this is a test.</test>
//     </controls>
//   </Page>
//   <Page Name = "User">
//     <controls>
//       <name>Sunil</name>
