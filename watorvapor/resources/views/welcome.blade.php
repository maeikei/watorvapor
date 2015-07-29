@extends('app')

@section('content')
<div class="container-content">
	<div class="row" >
        <div class="col-md-10 col-md-offset-1">
            <div class="col-text">{{trans('welcome.ThirtyYearBrainResearch')}}</div>
        </div>
		<div class="col-md-10 col-md-offset-1">
			<a href="{{ asset('img/brain.orig.png') }}" ><img height="120"src="{{ asset('img/brain.orig.png') }}"><a>
			<a href="{{ asset('img/brain.header.jpg') }}" ><img height="120"src="{{ asset('img/brain.header.jpg') }}"><a>
			<a href="{{ asset('img/brain.king.jpg') }}" ><img height="120"src="{{ asset('img/brain.king.jpg') }}"><a>
			<a href="{{ asset('img/brain.skelton.jpg') }}" ><img height="120"src="{{ asset('img/brain.skelton.jpg') }}"><a>
			<a href="{{ asset('img/digital.brain.reading.jpg') }}" ><img height="120"src="{{ asset('img/digital.brain.reading.jpg') }}"><a>
		</div>
	</div>
	<div class="row" >
        <div class="col-md-10 col-md-offset-1">
            <div class="col-text">{{trans('welcome.ThirtyYearStrongAI')}}</div>
        </div>
		<div class="col-md-10 col-md-offset-1">
			<a href="{{ asset('img/ai.nl.jpg') }}" ><img height="120"src="{{ asset('img/ai.nl.jpg') }}"><a>
			<a href="{{ asset('img/ai.dnn.jpg') }}" ><img height="120"src="{{ asset('img/ai.dnn.jpg') }}"><a>
			<a href="{{ asset('img/ai.dream.jpg') }}" ><img height="120"src="{{ asset('img/ai.dream.jpg') }}"><a>
			<a href="{{ asset('img/i.am.robot.png') }}" ><img height="120"src="{{ asset('img/i.am.robot.png') }}"><a>
		</div>
	</div>
	<div class="row" >
        <div class="col-md-10 col-md-offset-1">
            <div class="col-text">{{trans('welcome.FortyYearBrainRead')}}</div>
        </div>
		<div class="col-md-10 col-md-offset-1">
			<a href="{{ asset('img/digital.Consciousness.reading.jpg') }}" ><img height="120"src="{{ asset('img/digital.Consciousness.reading.jpg') }}"><a>
			<a href="{{ asset('img/digital.brain.block.jpg') }}" ><img height="120"src="{{ asset('img/digital.brain.block.jpg') }}"><a>
			<a href="{{ asset('img/digital.soul.jpg') }}" ><img height="120"src="{{ asset('img/digital.soul.jpg') }}"><a>
			<a href="{{ asset('img/digital.Consciousness.binary.jpg') }}" ><img height="120"src="{{ asset('img/digital.Consciousness.binary.jpg') }}"><a>
			<a href="{{ asset('img/digital.brain.block.3d.jpg') }}" ><img height="120"src="{{ asset('img/digital.brain.block.3d.jpg') }}"><a>
		</div>
	</div>
	<div class="row" >
        <div class="col-md-10 col-md-offset-1">
            <div class="col-text">{{trans('welcome.FortyYearBrain2Robot')}}</div>
        </div>
		<div class="col-md-10 col-md-offset-1">
			<a href="{{ asset('img/robot.brain.vista.jpg') }}" ><img height="120"src="{{ asset('img/robot.brain.vista.jpg') }}"><a>
			<a href="{{ asset('img/robot.brain.why.jpg') }}" ><img height="120"src="{{ asset('img/robot.brain.why.jpg') }}"><a>
			<a href="{{ asset('img/robot.brain.white.jpg') }}" ><img height="120"src="{{ asset('img/robot.brain.white.jpg') }}"><a>
			<a href="{{ asset('img/robot.thinking.pose.jpg') }}" ><img height="120"src="{{ asset('img/robot.thinking.pose.jpg') }}"><a>
		</div>
	</div>
	<div class="row" >
        <div class="col-md-10 col-md-offset-1">
            <div class="col-text">{{trans('welcome.FiftyYearRobot2Universe')}}</div>
        </div>
		<div class="col-md-10 col-md-offset-1">
			<a href="{{ asset('img/robot.rocket.block.jpg') }}" ><img height="120"src="{{ asset('img/robot.rocket.block.jpg') }}"><a>
			<a href="{{ asset('img/robot.star.space.jpg') }}" ><img height="120"src="{{ asset('img/robot.star.space.jpg') }}"><a>
			<a href="{{ asset('img/space.travel.jpg') }}" ><img height="120"src="{{ asset('img/space.travel.jpg') }}"><a>
			<a href="{{ asset('img/space.travel.land.jpg') }}" ><img height="120"src="{{ asset('img/space.travel.land.jpg') }}"><a>
		</div>
	</div>
	<div class="row" >
        <div class="col-md-10 col-md-offset-1">
            <div class="col-text">{{trans('welcome.HundredYearDason')}}</div>
        </div>
		<div class="col-md-10 col-md-offset-1">
			<a href="{{ asset('img/earth.kepler-20.jpg') }}" ><img height="120"src="{{ asset('img/earth.kepler-20.jpg') }}"><a>
			<a href="{{ asset('img/earth.kepler-20.glaxy.jpg') }}" ><img height="120"src="{{ asset('img/earth.kepler-20.glaxy.jpg') }}"><a>
			<a href="{{ asset('img/kepler.daison.jpg') }}" ><img height="120"src="{{ asset('img/kepler.daison.jpg') }}"><a>
			<a href="{{ asset('img/kepler.daison.black.jpg') }}" ><img height="120"src="{{ asset('img/kepler.daison.black.jpg') }}"><a>
		</div>
	</div>
	<div class="row" >
        <div class="col-md-10 col-md-offset-1">
            <div class="col-text">{{trans('welcome.TwoHundredYearHuman')}}</div>
        </div>
		<div class="col-md-10 col-md-offset-1">
			<a href="{{ asset('img/human.robot.jpg') }}" ><img height="120"src="{{ asset('img/human.robot.jpg') }}"><a>
		</div>
	</div>
</div>
@endsection
